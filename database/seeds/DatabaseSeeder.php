<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role_name' => 'admin']);
        Role::create(['role_name' => 'doctor']);
        Role::create(['role_name' => 'patient']);
        // $this->call(UsersTableSeeder::class);
    }
}
