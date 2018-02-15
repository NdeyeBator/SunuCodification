<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              User::create([
          'name' => 'Ndeye Bator',
          'email' => 'ndeyebatorndiaye@gmail.com',
          'role' => 'agent',
          'password' => bcrypt('agent'),
        ]);
    }
}
