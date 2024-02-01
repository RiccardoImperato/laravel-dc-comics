<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics_db');

        foreach ($comics as $_comic) {
            $comic = new Comic();
            $comic->title = $_comic['title'];
            $comic->description = $_comic['description'];
            $comic->thumb = $_comic['thumb'];
            $comic->price = $_comic['price'];
            $comic->series = $_comic['series'];
            $comic->sale_date = $_comic['sale_date'];
            $comic->type = $_comic['type'];
            $comic->artists = $_comic['artists'];
            $comic->save();
        }
    }
}
