<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Sebastian Bárcenas',
            'email' => 'sbarcenas00@gmail.com',
            'password' => bcrypt('secret')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
