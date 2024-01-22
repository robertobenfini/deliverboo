<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $data = config('users');
        foreach ($data as $d){
            $newUser = new User();
            $newUser->name = $d['name'];
            $newUser->email = $d['email'];
            $newUser->password = Hash::make('training');
            $newUser->save();
        }
    }
}
