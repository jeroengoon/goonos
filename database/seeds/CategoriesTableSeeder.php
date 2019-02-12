<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 0; $i++) {
            App\Category::create([             
                'user_id' => User::all()->random()->id,    
                'category_title' => $faker->word,
                'category_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'created_at' => $current = Carbon::now(),
            ]);
        }
    }
}




