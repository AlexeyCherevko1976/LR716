<?php
use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// k-9-10 2

Route::get('products', 'ProductsController@index');
/**/
//Route::get('products', function(){	return response(['Product1', 'Product2', 'Product2'], 200);});
//Route::get('products', function(){return response(Product::all(),200);});
 
//Route::get('products/{product}', 'ProductsController@show');
Route::get('products/{product}', function ($productId){
	return response(Product::find($productId),200);
});


Route::post('products','ProductsController@store');
 
Route::put('products/{product}','ProductsController@update');
 
Route::delete('products/{product}', 'ProductsController@delete');