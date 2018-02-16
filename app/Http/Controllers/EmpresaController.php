<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller{

  private $empresa;

  public function __construct(Empresa $emp){
    $this->empresa = $emp;
  }

  public function index(){
    return $this->empresa->all();
  }

  public function create(){
      //
  }

  public function store(Request $request){
    //url --> /empresa (por post)
      $dataform = $request->all();
      $insert = $this->empresa->create($dataform);
      if($insert === true){
        $json[]=array(  "title"=>"Sucesso", "Descri"=>"{$insert->nome_fantasia}");
        return json_encode($json);
      }else{
        $json[]=array(  "title"=>"Error", "Descri"=>"Erro ao inserir {$insert->nome_fantasia}");
        return json_encode($json);
      }

  }

  public function show($id=66){
    //url --> /empresa/{$id} (por get)
    $emp = $this->empresa->find($id);
    return json_encode($emp);
  }

  public function edit($id){
      //
  }

  public function update(EmpresaRequest $request, $id){

    //url --> empresa/{id} (por put)
    // json_decode($request->getContent(), true);
    $text = json_decode($request->getContent(), true);

    $emp = $this->empresa->find($id);
    // $emp = $this->empresa->where('name', 'pattern');
    //$request com tem as function (all(){q retorna todas as info}, only(){q retorna as variaveis q escolher com seus valores},
    //except(){q remove do retorno as variaveis q escolher com seus valores} e input(){q retorna p valor da variavel q escolher})
    $update = $emp->update($text);
    if($update === true){
      return response()->json(['message'=>'veio'], 201);
    }else{
      return response()->json(['message'=>'FUDEU'], 400);
    }


  }

  public function destroy($id){
    //url --> empresa/{id} (por delete)
    if ($request->isMethod('post')) {
      $delete = $emp->destroy($id);
      // $emp = $this->empresa->where('name', 'pattern');
      if($delete === true){
        $json[]=array(  "title"=>"Sucesso", "Descri"=>"{$emp->nome_fantasia}");
        return json_encode($json);
      }else{
        $json[]=array(  "title"=>"Error", "Descri"=>"Erro ao alterar {$emp->nome_fantasia}");
        return json_encode($json);
      }
    }

  }

  public function teste(EmpresaRequest $request, $id){
    $request->wantsJson();
    dd($id);
    return response()->json(['message'=>'veio'], 201);
  }
}
