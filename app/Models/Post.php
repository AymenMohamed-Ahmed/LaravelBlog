<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'author', 'content', 'image', 'date'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function delete()
    {
        $this->comments()->delete();
        return parent::delete();
    }
}