<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function subject(){
        return $this->hasOne(Subject::class);
    }
    public function section(){
        return $this->hasOne(Section::class);
    }
    public function question(){
        return $this->hasOne(Question::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
