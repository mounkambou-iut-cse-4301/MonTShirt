<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $produits=produit::all();
    
        return view('shop/index',compact('produits'));
    }

    public function produit( Request $request){
        $produit=produit::find($request->id);
        return view('shop/produit',compact('produit'));
    }

    public function viewByCategory( Request $request){
        $produits= Produit::where('category_id',$request->id)->get();
     
        return view('shop.categorie',compact('produits'));
    }
}