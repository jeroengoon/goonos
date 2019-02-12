<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            App\Article::create([               
                'user_id' => User::all()->random()->id,
                'title' => $faker->word,
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'created_at' => $current = Carbon::now(),
            ]);
        }
    }
}
