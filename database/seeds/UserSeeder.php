<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;
        DB::table('users')->insert([
            'name' => 'thanhnv',
            'email' => 'thanhnv@gmail.com',
            'email_verified_at' => now(),
            'password' => md5('thanh123'), // password
            'remember_token' => '123456',
        ]);
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'email_verified_at' => now(),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => '123456',
        //     ]);
        // }
    }
}