<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\User;
use App\Category;

class Post extends Model
{
    use Sluggable;

    protected $dates = [ 'created_at' ];

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'slug',
        'thumbnail'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function thumbnail()
    {   
        return !$this->thumbnail ? asset('edubin/images/news/no_thumbnail.png') : $this->thumbnail;
    }
}
