<?php

namespace App\Http\Requests;
use App\Models\Empresa;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest{

  public function authorize(){
    
    return true;
  }

  public function rules(){
    return [
      'nome_fantasia'       => 'required|min:3|max:255',
      'razao_social'        => 'min:3|max:255',
      'CNPJ'                => 'min:3|max:255'
      // 'inscricao_estadual'  => 'min:3|max:50',
      // 'CPF'                 => 'required|min:3|max:20',
      // 'telefone'            => 'required|min:3|max:50',
      // 'celular'             => 'required|min:3|max:50',
      // 'password'            => 'required|min:3|max:255',
      // 'email'               => 'required|min:3|max:255'
    ];
  }
}
