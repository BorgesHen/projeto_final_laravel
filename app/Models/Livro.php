<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livro';
    protected $fillable = ['livro_ID', 'titulo', 'autor', 'genero', 'dataLanc'];
}
