<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = factory('App\User', 20)->create()->each(function($u) {
            $u->articles()->save(factory('App\Article')->make());
        });
    }
}
