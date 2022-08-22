<?php

namespace App\Http\Controllers;

use App\Models\AlamatPengirim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlamatPengirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // menampilkan alamat pengiriman sesuai user yang sedang login
    public function index(Request $request)
    {
        $itemuser = $request->user();
        $itemalamatpengirim = AlamatPengirim::where('user_id', $itemuser->id)->paginate(10);
        $data = array('title' => 'Alamat Pengiriman',
                'itemalamatpengiriman' => $itemalamatpengirim,);
        return view('alamatpengiriman.index', $data)->with('no', ($request->input('page',1)-1)* 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    // Menyimpan inputan user kedalam database
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_penerima' => 'required',
            'no_tlp'=>'required',
            'alamat'=>'required',
            'provinsi'=>'required',
            'kota'=>'required',
            'kecamatan'=>'required',
            'kelurahan'=>'required',
            'kodepos'=>'required'
        ]);
        $url = $request->url;
        $itemuser = $request->user();
        $inputan = $request->all();
        $inputan['user_id'] = $itemuser->id;
        $inputan['status'] = 'utama';
        $itemalamatpengirim = AlamatPengirim::create($inputan);
        AlamatPengirim::where('id', '!=', $itemalamatpengirim->id)->update(['status' => 'tidak']);
        return back()->with('url',$url);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlamatPengirim  $alamatPengirim
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Auth::check()){
            $id = Auth::id();
            return view('user.alamatpengiriman.index',[
                'title'=>'Alamat User',
                'active'=>'market',
                'item'=>AlamatPengirim::where('user_id', $id)->get()
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlamatPengirim  $alamatPengirim
     * @return \Illuminate\Http\Response
     */
    public function edit(AlamatPengirim $alamatPengirim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlamatPengirim  $alamatPengirim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = $request->url;
        $itemalamatpengirim = AlamatPengirim::findOrFail($id);
        $itemalamatpengirim->update(['status'=>'utama']);
        AlamatPengirim::where('id', '!=', $id)->update(['status' => 'tidak']);
        return back()->with('success', 'Alamat berhasil diupdate')->with('url',$url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlamatPengirim  $alamatPengirim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $url = $request->url;
        AlamatPengirim::destroy($id);
        return back()->with('url',$url)->with('Success','Alamat berhasil dihapus');
    }
}
