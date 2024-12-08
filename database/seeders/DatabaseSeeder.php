<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'email' => "admin@go2school.com",
            'password' => Hash::make('password'),
        ]);

        Group::create([
            'grade' => '1',
            'group' => 'A',
            'carreer' => 'Programation',
        ]);
        
        Student::factory(100)->create();
    }
}
