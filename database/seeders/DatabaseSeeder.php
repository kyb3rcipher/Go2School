<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Group;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Group::factory()->create([
            'grade' => '1 - 2',
            'group' => 'A',
            'carreer' => 'Programation',
        ]);
        
        Student::factory(10)->create();
    }
}
