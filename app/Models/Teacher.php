<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'number',
        'date_of_birth',
        'current_addres',
        'permanent_address',
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
