<?php

use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
//
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('empresa', 'EmpresaController');

Route::group(['prefix'=>'/empresa'], function(){
  Route::put('/{id}', 'EmpresaController@update')->name('edit_Empresa');
  Route::get('/{id}', 'EmpresaController@show')->name('list_Empresa');
});
