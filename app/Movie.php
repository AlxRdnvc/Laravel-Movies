<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director' , 'year', 'storyline'];

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
