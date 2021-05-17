<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table ='personnes';
    protected $fillable = [
        'name',
        'prenom',
        'age',
        'ddn',
        'genre',
    ];

    protected $hidden =[
    'name',
    'prenom',
    'age',
    'ddn',
    'genre',
];
}
