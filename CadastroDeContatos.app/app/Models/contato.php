<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';
    protected $fillable = [
 
        'telefone',
        'endereco',
        'cep',
        'complemento',
        'numero',
        'estado',
        'user_cont_id'
    ];

    public function userContato(){
        return $this->belongsTo(UserContato::class,'user_cont_id');
    }
}
