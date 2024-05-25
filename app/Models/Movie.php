<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'director', 'genre_id', 'description', 'release_date'];

    public function genres() {
        return $this->belongsTo('App\Models\Genre');
    }
}
