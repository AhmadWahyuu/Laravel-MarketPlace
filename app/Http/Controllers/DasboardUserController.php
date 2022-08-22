<?php

namespace App\Http\Controllers;

use App\Models\AlamatPengirim;
use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DasboardUserController extends Controller
{
    // menampilkan halaman home user
    public function home(){
        return view('user.home',[
            'title'=>'Home',
            'active'=>'home'
        ]);
    }

    // menampilkan halaman market pada user
    public function market(){
        $abjad = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P',
                    'Q','R','S','T','U','V','W','X','Y','Z'];
        return view('user.market',[
            'title'=>'Market',
            'produk'=> Market::latest()->filter(request(['search','category']))->sort(request(['list','category']))->paginate(9)->withQueryString(),
            'categories'=>Category::orderBy("nama")->get(),
            'list'=>$abjad,
            'active'=>'market'
        ]);
    }

    // menampilkan detai produk pada user
    public function produk(Market $market){
        return view('user.produk',[
            'title'=>'Produk',
            'active'=>'market',
            'produk'=>$market
        ]);
    }

    // menampilkan tampilan checkout produk pada halaman user
    public function order(Market $market){
        if (Auth::check()){
            $id = Auth::id();
            return view('user.checkout.index',[
                'title'=>'Order',
                'active'=>'market',
                'produk'=>$market,
                'item'=>AlamatPengirim::where('user_id', $id)->where('status', 'utama')->get()
            ]);
        }
    }

    // mengirim data order kedalam data base
    public function checkout(Request $request){
        $data = $request->validate([
            'produk_id'=>'required',
            'user_id'=>'required',
            'alamat_id'=>'required'
        ]);

        Order::create($data);
        return redirect('/user/market');
    }

    // fitur riwayat order
    public function riwayat(){
        if (Auth::check()){
            
            $id = Auth::id();
            return view('user.checkout.riwayat',[
                'title'=>'Riwayat',
                'active'=>'riwayat',
                'riwayat'=>Order::where('user_id',$id)->get()
            ]);
        }
    }
}
