<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'roll',
        'number',
        'date_of_birth',
        'current_addres',
        'permanent_address',

    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
