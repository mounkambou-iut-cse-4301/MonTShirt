<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt Goonies";
        $produit->prix_ht=25;
        $produit->description="T-Shirt du film les Gonnies";
        $produit->photo_principale="goonies.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt happy";
        $produit->prix_ht=28;
        $produit->description="T-Shirt du film les happy";
        $produit->photo_principale="happy.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt hulk";
        $produit->prix_ht=24;
        $produit->description="T-Shirt du film les hulk";
        $produit->photo_principale="hulk.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt krusty_simpson";
        $produit->prix_ht=95;
        $produit->description="T-Shirt du film les krusty_simpson";
        $produit->photo_principale="krusty_simpson.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt simpson";
        $produit->prix_ht=25;
        $produit->description="T-Shirt du film les simpson";
        $produit->photo_principale="simpson.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt Star_Trek";
        $produit->prix_ht=65;
        $produit->description="T-Shirt du film les Star_Trek";
        $produit->photo_principale="Star_Trek.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt sunshine";
        $produit->prix_ht=5;
        $produit->description="T-Shirt du film les sunshine";
        $produit->photo_principale="sunshine.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt superman";
        $produit->prix_ht=15;
        $produit->description="T-Shirt du film les superman";
        $produit->photo_principale="superman.jpg";
        $produit->save();

        $produit=new \App\Models\Produit();
        $produit->nom="T-Shirt wonder_woman";
        $produit->prix_ht=45;
        $produit->description="T-Shirt du film les wonder_woman";
        $produit->photo_principale="wonder_woman.jpg";
        $produit->save();
    }
}
