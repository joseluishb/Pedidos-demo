<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Juan',
            'email' => 'juan@demo.com',
            'password' => bcrypt('metro123'),
            'admin' => true
        ]);
    }
}
