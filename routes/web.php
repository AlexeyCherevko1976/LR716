<?php
use App\Product;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
	
    //$products=Product::all();
    //$products=Product::orderBy('price', 'asc')->get();
    $products=DB::table('products')->get();

    return view('welcome', ['products'=>$products]);
});
