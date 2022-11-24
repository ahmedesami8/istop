<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classroom;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'course_id' , 'teacher_id' , 'description' ];


    public function Teacher()
    {
        return $this->belongsToOne(Teacher::class);
    }

}
