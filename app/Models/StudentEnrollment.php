<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class_want_to_admission',
        'address',
        'father_name',
        'mother_name',
        'date_of_birth',
        'phone_number',
        'is_read'
    ];
}
