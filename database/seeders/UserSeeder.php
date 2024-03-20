<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'      =>      'Billy Rumbiak',
            'email'     =>      'br@gmail.com',
            'password'  =>      Hash::make('123')
        ]);
    }
}
