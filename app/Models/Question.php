<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
