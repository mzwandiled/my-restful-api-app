<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lets truncate our existing records to start from scratch
        Article::truncate();

        $faker = \Faker\Factory::create();

        //and now lets create few articles
        for($i=0;$i<50;$i++)
        {
            Article::create([
               'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }

    }
}
