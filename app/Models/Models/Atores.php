<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_filme',
        'atores'
    ];

}
