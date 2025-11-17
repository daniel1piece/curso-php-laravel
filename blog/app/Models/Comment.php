<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Inversed many-to-many relationship (comment-user):
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Inversed one-to-many relationship (comments-article):
    public function article() {
        return $this->belongsTo(Article::class);
    }
}
