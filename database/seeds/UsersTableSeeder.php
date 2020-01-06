<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker::create();
        // $json = File::get('database/data/users.json');
        // $users = json_decode($json);
        for ($i = 1; $i < 51; $i++) {
            User::create([
                'id' => $i,
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('secret')

            ]);
        }
    }
}