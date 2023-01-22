<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
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
        User::updateOrCreate(
            ['email' => 'alvaro@mail.com'],
            [
                'name' => 'Álvaro de la Rosa',
                'password' => Hash::make('123456'),
            ]
            );
    }
}
