<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller{

    public function index(){
        return \App\Models\Restaurante::all();
    }

    public function create(){
        //
    }

    public function store(Request $request){
        return \App\Models\Restaurante::create($request->all());
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
