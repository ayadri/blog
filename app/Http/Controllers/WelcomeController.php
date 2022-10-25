<?php

namespace App\Http\Controllers;

use App\Achat;
use App\Categorie;
use App\Order;
use App\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class WelcomeController extends Controller
{
    public function index(){
        $categorie = Categorie::count();
        $produits = Produit::all();

        //dd($produits);
        //$achats = Achat::count();
        $achats = Achat::all();
        $orders = Order::count();

        return view('welcome',compact('categorie','produits','achats','orders'));
    }
}
