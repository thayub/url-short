<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UserTableSeeder::class);
        Model::reguard();
    }
}
