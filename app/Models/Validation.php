<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket',
        'name',
        'cpf',
        'cnpj',
        'phone',
        'email',
        'type',
        'validity',
        'price'
    ];
}
