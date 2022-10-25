<?php

namespace App\Http\Controllers;
use App\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $shelfs = Shelf::get();

        return view('shelf.index',compact('shelfs'));


        /*return view('shelfs.index', [
            'prod' => $shelfs,
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
        return view('shelf.create');
    }
    /*
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
        ]);

        //dd($request->all());

        Shelf::create([

            'name'=> $request->name,
        ]);

        return redirect()->route('shelf.index')
                        ->with('success','Shelf created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shelf $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Shelf $shelf)
    {
        //$shelfs = Shelfs::findOrFail($id);
        return view('shelf.show',compact('shelf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shelf $shelfs
     * @return \Illuminate\Http\Response
     */
    public function edit(Shelf $shelf)
    {
        return view('shelf.edit',compact('shelf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shelf $shelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shelf $shelf)
    {
        $request->validate([

            'name' => 'required',

        ]);

       // $produit->update($request->all());



       $shelf->name = $request->name;


       $shelf->save();

        return redirect()->route('shelf.index')
                        ->with('success','Shelf updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shelf $shelf)
    {
        $shelf->delete();

        return redirect()->route('shelf.index')
                        ->with('success','Shelf deleted successfully');
    }
}

