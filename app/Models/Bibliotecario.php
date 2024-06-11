<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotecario extends Model
{
    protected $table = 'bibliotecarios';
    protected $fillable = ['nome', 'horario', 'secao', 'data_publicacao'];
}
