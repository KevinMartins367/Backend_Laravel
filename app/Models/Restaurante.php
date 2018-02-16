<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model{

  protected $fillable = [
    'id',
    'empresa_id',
    'nome',
    'tipo',
    'telefone',
    'celular',
    'img_url',
    'pedido_url',
    'endereco',
    'flag_pedido_cadastrado',
    'latitude',
    'longitude',
    'data_criacao'
  ];

}
