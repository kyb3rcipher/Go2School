<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected static ?string $password;
    
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => static::$password ??= Hash::make('password'),
            //'photo' => ,
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'gender' => 'Femenine',
            'birthday' => fake()->date(),
            'blood_type' => 'A+',
            'group_id' => '1',
        ];
    }
}
