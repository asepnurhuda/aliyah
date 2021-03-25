<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Teacher extends Model
{
    protected $fillable = [
        'nama',
        'course_id',
        'biografi',
        'fb',
        'ig',
        'linkedin',
        'deskripsi',
        'thumbnail'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function thumbnail()
    {   
        return !$this->thumbnail ? asset('edubin/images/news/no_thumbnail.png') : $this->thumbnail;
    }

}
