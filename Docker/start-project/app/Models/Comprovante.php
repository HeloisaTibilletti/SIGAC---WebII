<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprovante extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categoria() {
        return $this->belongsTo('App\Models\Categoria'); // recebe chave estrangeira
    }

    public function aluno() {
        return $this->belongsTo('App\Models\Aluno');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
