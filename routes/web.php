<?php

use App\Http\Controllers\AchatprodController;
use App\Http\Controllers\BcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\produitController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[WelcomeController::class,'index']);

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::resource('produit', 'ProduitController');
Route::resource('categorie','CategorieController');
Route::resource('shelf','ShelfController');
Route::resource('achat','AchatController');
Route::get('/{id}/apdestroy',[AchatController::class,'apdestroy'])->name('apdestroy');

Route::resource('supplier','SupplierController');
Route::resource('client','ClientController');
Route::get('/achatprod',[AchatprodController::class,'index'])->name('achatprod');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::resource('invoices', 'InvoicesController');
Route::resource('order','OrderController');
Route::get('generate-invoice','OrderController@invoice');
Route::resource('bc','BcController');
Route::get('bc/produit/{supplier?}',[BcController::class,'get_produit'])->name('bc_get_produit');



