<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function save()
    {
        if (is_null(Genre::first())) {
            Genre::create(['name' => 'ação']);
            Genre::create(['name' => 'aventura']);
            Genre::create(['name' => 'animação']);
            Genre::create(['name' => 'mistério']);
            Genre::create(['name' => 'romance']);
            Genre::create(['name' => 'fantasia']);
        }
    }
}