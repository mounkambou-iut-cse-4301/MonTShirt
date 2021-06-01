<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $produits=produit::all();
        // dd($produit);
        return view('shop/index',compact('produits'));
    }
}
