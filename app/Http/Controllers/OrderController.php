<?php

namespace App\Http\Controllers;

use App\Order;
use App\Categorie;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orders = Order::get();

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cat = Categorie::all();
        $prod= Produit::all();
        return view('order.create', [
            'categories'=>$cat, 'produits'=>$prod] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $order = new Order;
            $order->categorie_id= $request->categorie_id;
            $order->produit_id = $request->produit_id;
            $order->quantity = $request->quantity;
        $order->save();


        return redirect()->route('order.index')
                        ->with('success','Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //$categorie = Categorie::findOrFail($id);
        $ord= Order::all();
        return view('order.show',[
            'orders'=>$ord
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order   $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order  $order )
    {
        $request->validate([
            'categorie_id' => 'required',
            'produit_id' => 'required',
            'quantity' => 'required',
        ]);
           // $produit->update($request->all());

        $order->categorie_id = $request->categorie_id;
        $order->produit_id = $request->produit_id;
        $order->quantity = $request->quantity;


        $order->save();

        return redirect()->route('order.index')
                        ->with('success','Order updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index')
                        ->with('success','order deleted successfully');
    }

    public function invoice(){

        $prod= Produit::all();
        $ord= Order::all();
    return view('order.invoice', [
        'produits'=>$prod, 'orders'=>$ord]);
    }
}
