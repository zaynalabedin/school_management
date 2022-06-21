<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'password',
        'number',
        'date_of_birth',
        'current_addres',
        'permanent_address',
        'images',
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
