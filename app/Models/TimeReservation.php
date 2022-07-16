<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeReservation extends Model
{
    use HasFactory;

    protected $fillable = ['date','time','movie_id','movie_theater_id', 'cine_id']; 

    public function movie()
    {
       return $this->belongsTo(Movie::class, 'movie_id');
    }
    
    public function movieTheater()
    {
       return $this->belongsTo(MovieTheater::class, 'movie_theater_id');
    }
    
    public function cine()
    {
       return $this->belongsTo(Cine::class, 'cine_id');
    }


}