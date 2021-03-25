<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'start',
        'finish',
        'room',
        'address',
        'date'
    ];

    public function thumbnail()
    {   
        return !$this->thumbnail ? asset('edubin/images/news/no_thumbnail.png') : $this->thumbnail;
    }
}
