<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProd extends Model
{
    protected $table='prod';
    protected $fillable=['name', 'preco', 'descricao'];
}
