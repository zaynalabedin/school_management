<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function question(){
        return $this->hasOne(Question::class);
    }
}
