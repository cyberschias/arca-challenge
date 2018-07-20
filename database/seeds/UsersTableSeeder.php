<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$usuario = [
			'username' => 'master',
			'email' => 'joaopschias@hotmail.com',
			'password' => 'teste',
			'name' => 'Master',
		];

		Sentinel::registerAndActivate($usuario);
    }
}
