<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // This property is the reverse of $fillable
    // Here we list the property that we do not
    // want to fill them out massively 
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    // Inversed one-to-one relationship (profile-user):
    public function user() {
        return $this->belongsTo(User::class);
    }
}
