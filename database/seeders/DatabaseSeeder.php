<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'email' => "admin@go2school.com",
            'password' => Hash::make('password'),
        ]);
    }
}
