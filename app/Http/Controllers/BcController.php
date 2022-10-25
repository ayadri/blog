<?php

namespace App\Http\Controllers;

use App\Boncommande;
use App\Produit;
use Illuminate\Http\Request;
use App\Supplier;

class BcController extends Controller
{
    public function index()
    {

        $bc = Boncommande::get();

        return view('bc.index',compact('bc'));


        /*return view('categorie.index', [
            'cat' => $categorie,
        ]);
*/

    }
    public function create(){
        $title = 'Creer un Bon De Commande';
        $ref = 'BC-' .rand();
        $supplier = Supplier::orderBy('name','asc')->get();
        $produits = Produit::get();
        return view('bc.create',compact('title','ref','supplier','produits'));

    }
    public function get_produit($supplier_id){
        $produit = Produit::where('supplier_id',$supplier_id)->get();
        return response()->json( $produit );
    }
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'produit' => 'required',
            'supplier_id' => 'required',
            'qty' => 'required',
            'datec' => 'required',
            'client' => 'required',
            'paiment' => 'required',
            'echeance' => 'required',

        ]);
        Boncommande::create([

            'reference'=> $request->reference,
            'produit'=> $request->produit,
            'supplier_id'=> $request->supplier_id,
            'qty'=> $request->qty,
            'datec'=> $request->datec,
            'client'=> $request->client,
            'paiment'=> $request->paiment,
            'echeance'=> $request->echeance,


        ]);

        return redirect()->route('bc.index')
                        ->with('success','Bon de commande created successfully.');

        }
         /**   $bc->produit= $request->produit;
            *$bc->supplier_id= $request->supplier_id;
            *$bc->qty= $request->qty;
            *$bc->datec=$request->datec;
            *$bc->client=$request->client;
            *$bc->paiment=$request->paiment;
            *$bc->echeance=$request->echeance;

            *$bc->save();
            *$title = 'Creer un Bon De Commande';
            *$ref = $bc->reference;
            *$supplier = Supplier::orderBy('name','asc')->get();

            *return view('bc.create',compact('title','ref','supplier', 'bc'));



        *///dd($request->all());


       // $p = Produit::create([
          //  'reference'=> $request->reference,
          //  'name'=> $request->name,
          //  'price'=> $request->price,
            // 'description'=> $request->description,
            // 'unite'=> $request->unite,
            // 'date_exp'=> $request->date_exp,
            // 'picture'=> $request->picture,
            // 'categorie_id' => $request->categorie_id,
            // 'supplier_id'=> $request->supplier_id,
            // 'shelf_id'=> $request->shelf_id,
            // 'stock'=> $request->stock,
            // 'solde'=> $request->solde,
            // 'barcode'=> $request->barcode,
           //  'notes'=> $request->notes,
    //     ]) ;



    /**
     * Display the specified resource.
     *
     * @param  \App\Boncommande $bc
     * @return \Illuminate\Http\Response
     */


    public function show(Boncommande $bc)
    {
        return view('bc.show',compact('bc'));
    }

    public function edit(Boncommande $bc)
    {
        return view('bc.edit',compact('bc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boncommande  $bc
     * @return \Illuminate\Http\Response
 */
public function update(Request $request, Boncommande $bc)
{
    $request->validate([

        'supplier_id' => 'required',
        'produit' => 'required',
        'qty' => 'required',
        'datec' => 'required',
        'paiment' => 'required',
        'echeance' => 'required',
    ]);

   // $produit->update($request->all());
   $bc->supplier_id = $request->supplier_id;
   $bc->produit = $request->produit;
   $bc->qty = $request->qty;
   $bc->datec = $request->datec;
   $bc->paiment = $request->paiment;
   $bc->echeance = $request->echeance;



   $bc->save();

    return redirect()->route('bc.index')
                    ->with('success','Bon de commande updated successfully');
}

/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function destroy(Boncommande $bc)
    {
        $bc->delete();

        return redirect()->route('bc.index')
                      ->with('success','Bon de Commande deleted successfully');
    }
}
