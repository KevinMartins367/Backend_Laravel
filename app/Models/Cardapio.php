<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model{

  protected $fillable = [
    `id`,
    `restaurante_id`,
    `nome`,
    `tipo`,
    `ingredientes`,
    `observacao`,
    `preco`,
    `img_url`
  ];
}
