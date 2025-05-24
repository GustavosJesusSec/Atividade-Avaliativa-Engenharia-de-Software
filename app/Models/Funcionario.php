<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
    protected $fillable = ['id', 'Nome', 'Email', 'salario', 'departamento_id'];

     public function departamento() {
          return $this->belongsTo(Departamento::class);
      }
}
