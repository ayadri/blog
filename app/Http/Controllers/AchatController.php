<?php

namespace App\Http\Controllers;
use App\Achat;
use App\Achatprod;
use App\Produit;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    //
     public function index()
    {


        $achats = Achat::orderBy("date","DESC")->get();

        return view('achat.index',compact('achats'));


        /*return view('achat.index', [
            'ach' => $achat,
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
        $ref = 'BC-' .rand();
        $produit= Produit::all();

        return view('achat.create',compact( 'produit','ref'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd( $request->all() );

        $request->validate([
            'ref' => 'required',
            'date' => 'required',
            'etat' => 'required',
            'qty'=>'required',
            'paiment'=>'required',
        ]);


        //dd($request->all());
        $achat = Achat::create([
            'ref'=>$request->ref,
            'date'=>$request->date,
            'etat'=>$request->etat,
            'qty'=> $request->qty,
            'montant'=>0,
            'paiment'=>$request->paiment,
        ]);

        $somme = 0;

        if( $achat && $achat->id ){
            foreach ($request->aprod as $prd ) {
                $ap = Achatprod::create([
                    'produit_id'=>$prd['prod_id'],
                    'quantite'=>$prd['qty'],
                    'prix'=>$prd['price'],
                    'achat_id'=>$achat->id
                ]);

                $somme = $somme + ( $ap->prix * $ap->quantite );
            }

            $achat->montant = $somme;
            $achat->save();

        }

        return redirect()->route('achat.index')
                        ->with('success','Achat created successfully.');

        }
        /**
     * Display the specified resource.
     *
     * @param  \App\Achat $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        // dd( $achat->produits );
        //$achat = Achat::findOrFail($id);
        $produit= Produit::all();
        return view('achat.show',compact('achat', 'produit'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        //dd( $achat->produits );

        $produit= Produit::all();

        return view('achat.edit',compact('achat', 'produit'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
 */
public function update(Request $request,Achat $achat)
{
    $request->validate([
        'ref' => 'required',
        'date' => 'required',
        'etat' => 'required',
        'montant' =>'required',
        'paiment'=>'required',
    ]);

   // $produit->update($request->all());


   $achat->ref = $request->ref;
   $achat->date = $request->date;
   $achat->etat = $request->etat;
   $achat->paiment = $request->paiment;
   $achat->montant = $request->montant;





   if( $achat && $achat->id ){
    foreach ($request->aprod as $prd ) {
        Achatprod::create([
            'produit_id'=>$prd['prod_id'],
            'quantite'=>$prd['qty'],
            'prix'=>$prd['price'],
            'achat_id'=>$achat->id
        ]);
    }
}

   $achat->save();

    return redirect()->route('achat.show', $achat->id)
                    ->with('success','Achat updated successfully');
}

 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();

        return redirect()->route('achat.index')
                        ->with('success','Achat deleted successfully');
    }

    public function apdestroy(Achatprod $ap)
    {

        $ap->delete();

        return redirect()->back()
                        ->with('success','Achat deleted successfully');
    }


}
