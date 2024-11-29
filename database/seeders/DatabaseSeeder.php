<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Group;
use App\Models\Carrer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $carrers = [
            ['name' => 'Programation'],
            ['name' => 'Architecture'],
            ['name' => 'Electronic'],
            ['name' => 'ARH'],
        ];
        foreach ($carrers as $carrer) {
            Carrer::create($carrer);
        }

        Group::factory()->create([
            'grade' => '1 - 2',
            'group' => 'A',
            'carreer' => 'Programation',
        ]);
        
        Student::factory(10)->create();
    }
}
