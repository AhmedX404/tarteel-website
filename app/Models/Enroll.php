<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $table ='enrolls';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'course',
        'student_age',
        'student_gender',
        'teacher_gender',
        'days',
        'package',
      ];
}
