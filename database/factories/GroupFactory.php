<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    public function definition(): array
    {
        return [
            'grade' => '1',
            'group' => 'A',
            'carreer' => 'Programation',
        ];
    }
}
