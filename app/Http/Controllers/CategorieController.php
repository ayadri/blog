<?php

namespace App\Http\Controllers;
use App\Categorie;
use Illuminate\Http\Request;



class CategorieController extends Controller
{
    //
    public function index()
    {

        $categories = Categorie::get();

        return view('categorie.index',compact('categories'));


        /*return view('categorie.index', [
            'cat' => $categorie,
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
        return view('categorie.create');
    }
 /**
     * Store a newly created resource in storage.
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
        Categorie::create([

            'name'=> $request->name,
        ]);

        return redirect()->route('categorie.index')
                        ->with('success','Categorie created successfully.');

        }
        /**
     * Display the specified resource.
     *
     * @param  \App\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //$categorie = Categorie::findOrFail($id);
        return view('categorie.show',compact('categorie'));
    }

 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
 */
public function update(Request $request, Categorie $categorie)
{
    $request->validate([
        'name' => 'required',
    ]);

   // $produit->update($request->all());


   $categorie->name = $request->name;



   $categorie->save();

    return redirect()->route('categorie.index')
                    ->with('success','Categorie updated successfully');
}

 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect()->route('categorie.index')
                        ->with('success','Categorie deleted successfully');
    }
    }
