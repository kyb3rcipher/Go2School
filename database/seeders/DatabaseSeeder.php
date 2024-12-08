<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Carrer;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'email' => "admin@go2school.com",
            'password' => Hash::make('password'),
        ]);

        $carrers = [
            ['name' => 'Programation'],
            ['name' => 'Architecture'],
            ['name' => 'Electronic'],
            ['name' => 'ARH'],
        ];
        foreach ($carrers as $carrer) {
            Carrer::create($carrer);
        }
        
        Group::create([
            'grade' => '1',
            'group' => 'A',
            'carreer' => 'Programation',
        ]);
        
        Student::factory(100)->create();
    }
}
