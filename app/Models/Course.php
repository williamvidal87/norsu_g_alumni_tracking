<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'college_department_id',
        'course_name',
        'abrivation_name'
    ];
    
    public function getCollegeDepartment()
    {
        return $this->belongsTo(CollegeDepartment::class,'college_department_id');
    }
}
