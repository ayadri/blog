<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Supplier;
use App\Shelf;
use App\Produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $produits = Produit::where([
            ['name', '!=', NULL],
            [function($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('name', 'LIKE','%' .$term. '%')->get();
                }}]
        ])
         ->orderBy("id", "Asc")
         ->paginate(10);
         return view('produit.index', compact('produits'))->with('i', (request()->input('page', 1) -1) * 5);
        //$produits = Produit::get();
        //return view('produit.index', compact('produits'));


        /*return view('produit.index', [
            'prod' => $produit,
        ]);
        */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categorie::all();
        $sup = Supplier::all();
        $she = Shelf::all();

        return view('produit.create', [
                'categories'=>$cat, 'suppliers'=>$sup, 'shelfs'=>$she
            ]
        );


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        //dd($request->categorie_id);

            $produit = new Produit;
            $produit->reference= $request->reference;
            $produit->name= $request->name;
            $produit->price= $request->price;
            $produit->description= $request->description;
            $produit->unite= $request->unite;
            $produit->date_exp= $request->date_exp;
            $produit->picture= $request->file('picture')->getClientOriginalName();
            $produit->categorie_id= $request->categorie_id;
            $produit->supplier_id= $request->supplier_id;
            $produit->shelf_id= $request->shelf_id;
            $produit->stock= $request->stock;
            $produit->solde= $request->solde;
            $produit->barcode= $request->barcode;
            $produit->notes= $request->notes;
            $produit->save();



        //dd($request->all());


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

        return redirect()->route('produit.index')
                        ->with('success','Produit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //$produit = Produit::findOrFail($id);
        return view('produit.show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {

        return view('produit.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'reference' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'unite' => 'required',
            'date_exp' => 'required',
            'picture' => 'required',
            'categorie_id' => 'required',
            'supplier_id' => 'required',
            'shelf_id' => 'required',
            'stock' => 'required',
            'solde' => 'required',
            'barcode' => 'required',
            'notes' => 'required',
        ]);

       // $produit->update($request->all());


       $produit->reference = $request->reference;
       $produit->name = $request->name;
       $produit->price = $request->price;
       $produit->description = $request->description;
       $produit->unite = $request->unite;
       $produit->date_exp = $request->date_exp;
       $produit->picture = $request->picture;
       $produit->categorie_id = $request->categorie_id;
       $produit->supplier_id = $request->supplier_id;
       $produit->shelf_id = $request->shelf_id;
       $produit->stock = $request->stock;
       $produit-> solde = $request->solde;
       $produit->barcode = $request->barcode;
       $produit->notes = $request->notes;


       $produit->save();

        return redirect()->route('produit.index')
                        ->with('success','Produit updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produit.index')
                      ->with('success','Produit deleted successfully');
    }



}
