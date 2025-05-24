<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = ['setor', 'cargo'];

    public function funcionarios() {
        return $this->hasMany(Funcionario::class);
    }
}