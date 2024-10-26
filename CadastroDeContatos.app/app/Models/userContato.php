<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContato extends Model
{
    use HasFactory;

    protected $table = 'user_contatos';
    protected $fillable = [
        'name', 
        'email', 
        'data_nascimento'
    ];

    public function contatos(){
        return $this->hasMany(Contato::class, 'user_cont_id');
    }
}
