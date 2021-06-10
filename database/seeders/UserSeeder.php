<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
				$user->name = 'Cahyo';
				$user->email = 'cahyo@email.com';
				$user->password = \Hash::make('rahasia');
				$user->remember_token = \Str::random(10);
				$user->email_verified_at = now();
				$user->points = 10;
				$user->save();
    }
}
