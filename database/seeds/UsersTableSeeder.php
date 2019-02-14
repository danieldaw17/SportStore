<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

		DB::table('users')->insert([
            'name' => "root",
            'email' => "root@gmail.com",
            'password' => bcrypt('1234'),
			'nick' => "root",
			'lastName' => "root",
			'role' => "root"
        ]);

		DB::table('users')->insert([
            'name' => "user",
            'email' => "user@gmail.com",
            'password' => bcrypt('1234'),
			'nick' => "user",
			'lastName' => "user",
			'role' => "user"
        ]);

      

		/*$user = new User();

		$user->name = "root";
		$user->email = "root@gmail.com";
		$user->password = bcrypt('1234');
		$user->nick = "root";
		$user->lastName = "root";
		$user->role = "user";

		$user->save();*/

    }
}
