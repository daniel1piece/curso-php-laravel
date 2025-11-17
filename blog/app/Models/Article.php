<?php

namespace App\Models;

// use Dom\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Inversed one-to-many relationship (article-user):
    public function user() {
        return $this->BelongsTo(User::class);
    }

    // One-to-many relationshup (article-comments):
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Inversed one-to-many relationship 
    //      (articles-category)
    public function category() {
        return $this->belongsTo(Category::class);
    }

}

