<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Mariel E. Moreno',
                'email' => 'marielmoreno@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Shine Sotomayor',
                'email' => 'shinesotomayor@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Medi Aguanza',
                'email' => 'mediaguanza@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Tora Usagi',
                'email' => 'torausagi@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }

    }
}

