<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Market;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DasboardAdminController extends Controller
{
    // menampilkan halaman utama admin
    public function index(){
        return view('admin.dasboard',[
            'title' => 'Dashboard',
            'active'=> 'dasboard'
        ]);
    }

    // fitur logout pada admin
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }

    // menampilkan list produk pada dashboard admin 
    public function produk(){
        return view('admin.produk.produk',[
            'title'=>'Product',
            'active'=>'products',
            'produk'=>Market::latest()->paginate(10)->withQueryString()
        ]);
    }

    // fitur create atau menambahkan produk baru
    public function createProduk(){
        return view('admin.produk.create',[
            'title'=>'Create Produk',
            'active'=>'product',
            'categories'=>Category::orderBy("nama")->get()
        ]);
    }

    // fungsi untuk menyimpan masukan user yang telah menambah produk baru
    public function store(Request $request){
        $validated = $request->validate([
            'nama'=>'required',
            'category_id'=>'required',
            'image'=>'required|image|file|max:10240',
            'harga'=>'required',
            'spesifikasi'=>'required',
            'deskripsi'=>'nullable'
        ]);
        $slug = strtolower($validated['nama']);
        $slug1 = str_replace(' ','-',$slug);
        if ($request->file('image')){
            $validated['image'] = $request->file('image')->store('produk-image');
        }
        $item = ['nama'=>$validated['nama'],
                'slug'=>$slug1,
                'category_id'=>$validated['category_id'],
                'image'=>$validated['image'],
                'harga'=>$validated['harga'],
                'spesifikasi'=>$validated['spesifikasi'],
                'deskripsi'=>$validated['deskripsi']];
        Market::create($item);

        return redirect('/admin/produk')->with('success','Create New Product is Successfull');
    }

    // menampilkan detail produk pada fitur detail/logo mata
    public function show(Market $market){
        return view('admin.produk.show',[
            'title'=>'Show Produk',
            'active'=>'produk',
            'produk'=>$market
        ]);
    }

    // fitur edit produk
    public function edit(Market $market){
        return view('admin.produk.edit',[
            'title'=>'Edit Produk',
            'active'=>'produk',
            'produk'=>$market,
            'categories'=>Category::all()
        ]);
    }

    // fitur mengupdate data produk dan menyimpannya kedalam data base
    public function update(Request $request,Market $market){
        $validated = $request->validate([
            'nama'=>'required',
            'category_id'=>'required',
            'image'=>'required|image|file|max:10240',
            'harga'=>'required',
            'spesifikasi'=>'required',
            'deskripsi'=>'nullable'
        ]);
        $slug = strtolower($validated['nama']);
        $slug1 = str_replace(' ','-',$slug);
        if ($request->file('image')){
            $validated['image'] = $request->file('image')->store('produk-image');
        }
        Market::where('id',$market->id)->update([
            'nama'=>$validated['nama'],
            'slug'=>$slug1,
            'category_id'=>$validated['category_id'],
            'image'=>$validated['image'],
            'harga'=>$validated['harga'],
            'spesifikasi'=>$validated['spesifikasi'],
            'deskripsi'=>$validated['deskripsi']
        ]);
        return redirect('/admin/produk')->with('success','Update '.$validated['nama'].' is Successfull');
    }

    // fitur hapus produk
    public function destroy(Market $market){
        $nama = $market->nama;
        $order = Order::where('produk_id',$market->id)->first();
        if ($order){
            Order::destroy($order->id);
        }
        Market::destroy($market->id);
        return redirect('/admin/produk')->with('success','Delete '.$nama.' is Successfull');
    }

    // fitur menampilkan order yang masuk
    public function showOrder(){
        return view('admin.order',[
            'title'=>'Order',
            'active'=>'order',
            'items'=>Order::latest()->get()
        ]);
    }

    // fitur menampilkan categori yang dimiliki
    public function category(){
        return view('admin.category.category',[
            'title'=>'Category',
            'active'=>'categories',
            'items'=>Category::orderBy("nama")->get()
        ]);
    }

    // fitur menambahkan categori baru
    public function newCategory(){
        return view('admin.category.create',[
            'title'=>'Category',
            'active'=>'category'
        ]);
    }

    // fungsi untuk menyimpan data inputan user yang telah menambahkan data kategori kedalam database
    public function storeCategory(Request $request){
        $data = $request->validate([
            'nama'=>'required|unique:markets'
        ]);
        $slug = strtolower($data['nama']);
        $slug1 = str_replace(' ','-',$slug);
        $item = ['nama'=>$data['nama'],'slug'=>$slug1];
        Category::create($item);

        return redirect('/admin/category')->with('succes','Create'.$item['nama'].'Successful');
    }
}
