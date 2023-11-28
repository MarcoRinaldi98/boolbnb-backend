<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $tableFields = [
            [
                'name' => 'Marco',
                'lastname' => 'Rinaldi',
                'email' => 'marco@test.com',
                'birth_date' => '10/09/1998',
                'password' => Hash::make('password')
            ]

        ];
        foreach ($tableFields as $field) {

            $newUser = new User();
            $newUser->name = $field['name'];
            $newUser->lastname = $field['lastname'];
            $newUser->email = $field['email'];
            $newUser->phone = $field['birth_date'];
            $newUser->password = $field['password'];

            $newUser->save();
        }
    }
}
