<?php

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
    return 'aa';
});
Route::get('cast/{id}', function ($id) {
    return "aa: $id";
})->where('id','[0-9]+');
Route::get('/about', function () {
    $crop='Ivietech';
    //return view('about');
  return view('about')->with('corp',$crop);
});

Route::get('cats/breeds/{name}', function ($name){
    $breed =  Furbook\Breed::with('cats')->whereName($name)->first();

    return view('cats.index')->with('breed', $breed)->with('cats', $breed->cats);
});

Route::get('cats/{id}', function ($id){
    $cat =  Furbook\Cat::find($id);

    return view('cats.show')->with('cat', $cat);
});

