<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $suppliers = Supplier::get();

        return view('supplier.index',compact('suppliers'));


        /*return view('supplier.index', [
            'sup' => $supplier,
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
        return view('supplier.create');
    }
    /*
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        $request->validate([

            'code' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'fix' => 'required',
            'adress' => 'required',
        ]);

        //dd($request->all());

        Supplier::create([
            'code'=> $request->code,
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'fix'=> $request->fix,
            'adress'=> $request->adress,
        ]);


return redirect()->route('supplier.index')
->with('success','Supplier created successfully.');
}

/**
* Display the specified resource.
*
* @param  \App\Supplier $produit
* @return \Illuminate\Http\Response
*/
public function show(Supplier $supplier)
{
//$supplier = Supplier::findOrFail($id);
return view('supplier.show',compact('supplier'));
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\Supplier $suppliers
* @return \Illuminate\Http\Response
*/
public function edit(Supplier $supplier)
{
return view('supplier.edit',compact('supplier'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Supplier $supplier
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Supplier $supplier)
{
$request->validate([

'code' => 'required',
'name' => 'required',
'email' => 'required',
'phone' => 'required',
'fix' => 'required',
'adress' => 'required',
]);


$supplier->code = $request->code;
$supplier->name = $request->name;
$supplier->email = $request->email;
$supplier->phone = $request->phone;
$supplier->fix = $request->fix;
$supplier->adress = $request->adress;




$supplier->save();

return redirect()->route('supplier.index')
->with('success','Supplier updated successfully');
}


/**
* Remove the specified resource from storage.
*
* @param  \App\Blog  $blog
* @return \Illuminate\Http\Response
*/
public function destroy(Supplier $supplier)
{
$supplier->delete();

return redirect()->route('supplier.index')
->with('success','Supplier deleted successfully');
}
}


