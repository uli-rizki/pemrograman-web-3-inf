<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class UserSeeder
     * 
     */
    public function run(): void
    {
        $user = User::updateOrCreate([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123')
        ]);
    }
}
