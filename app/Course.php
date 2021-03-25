<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class Course extends Model
{
    protected $fillable = [
        'nama',
        'durasi',
        'deskripsi'
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
