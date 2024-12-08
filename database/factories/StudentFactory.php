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
            'name' => fake()->firstName() . " " . fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => static::$password ??= Hash::make('password'),
            //'photo' => ,
            'phone' => fake()->tollFreePhoneNumber(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['Woman', 'Man']),
            'birthday' => fake()->date(),
            'blood_type' => 'A+',
            'group_id' => '1',
        ];
    }
}
