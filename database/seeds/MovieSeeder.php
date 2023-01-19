<?php

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_movie = config('movie_return');

        foreach($array_movie as $elem){
            $new_movie = new Movie();
            $new_movie->title = $elem['title'];
            $new_movie->description = $elem['description'];
            $new_movie->image = $elem['thumb'];
            $new_movie->price = $elem['price'];
            $new_movie->series = $elem['series'];
            $new_movie->sale_date = $elem['sale_date'];
            $new_movie->type = $elem['type'];
            $new_movie->save();
        }
    }
}
