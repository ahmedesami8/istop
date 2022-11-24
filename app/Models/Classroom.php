<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'course_id' , 'teacher_id' , 'description' ];


    public function classrooms()
    {
        return $this->belongsToMany(Teacher::class,'roles');
    }

}
