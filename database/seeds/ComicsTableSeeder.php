<?php

use App\Comic;
use Illuminate\Database\Seeder;

// class ComicTableSeeder extends Seeder
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic) {
            $new_comic = new Comic();
            // $new_comic->title = $comic['title'];
            // $new_comic->description = $comic['description'];
            // $new_comic->thumb = $comic['thumb'];
            // $new_comic->price = $comic['price'];
            // $new_comic->series = $comic['series'];
            // $new_comic->sale_date = $comic['sale_date'];
            // $new_comic->type = $comic['type'];

            // visto che le chiavi del comics.php in config sono uguali ai nomi delle colonne della tabella in cui le inserirai puoi fare
            // ricordati che devi fare fillable nel model Comic.php
            $new_comic->fill($comic);

            $new_comic->save();
        }
    }
}
