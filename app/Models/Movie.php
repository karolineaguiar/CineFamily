<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age_classification','duration','genre_id']; 

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function cines()
    {
        return $this->belongsToMany(Cine::class);
    }
}