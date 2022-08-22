<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public static function index(){
        $abjad = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P',
                    'Q','R','S','T','U','V','W','X','Y','Z'];
        return view('market',[
            'title'=>'Market',
            'produk'=> Market::latest()->filter(request(['search','category']))->sort(request(['list', 'category']))->paginate(9)->withQueryString(),
            'categories'=>Category::orderBy("nama")->get(),
            'list'=>$abjad,
            'active'=>'market'
        ]);
    }
    public function find(Market $market){
        return view('produk', [
            'title' => 'Single Produk',
            'active'=> 'Produk',
            'produk' => $market
        ]);
    }
}
