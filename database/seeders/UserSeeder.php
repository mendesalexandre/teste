<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

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
                'nome' => 'Alexandre Teixeira Mendes',
                'tenant_id' => 1,
                'email' => 'alex.fnvip@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'nome' => 'Natália Rosas Bregolato',
                'tenant_id' => 1,
                'email' => 'nataliarosasb@hotmail.com',
                'password' => Hash::make('password')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
