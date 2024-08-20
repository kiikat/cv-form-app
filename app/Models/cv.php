<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'surname',
        'age',
        'phone',
        'email',
        'education',
        'experience',
        'skills',
        'language1',
        'language2',
        'language3'
    ];
}
