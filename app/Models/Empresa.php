<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model{
  protected $table = "empresa";
  protected $fillable = [
    'id',
    'nome_fantasia',
    'razao_social',
    'CNPJ',
    'inscricao_estadual',
    'CPF',
    'telefone',
    'celular',
    'password',
    'email'
  ];

}
