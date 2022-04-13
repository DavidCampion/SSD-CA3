<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Contact extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['commentID','commentsName', 'slug', 'commentsEmail', 'commentsPhone', 'commentsMessage'];

   

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'commentsName'
            ]
        ];
    }
}
