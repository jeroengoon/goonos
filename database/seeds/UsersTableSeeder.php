<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 1000; $i++) {
            App\User::create([
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'phone' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'housenumber' => $faker->buildingNumber,
                'city' => $faker->city,
                'country' => $faker->country,
                'postalcode' => $faker->postcode,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
            ]);
        }
    }
}
