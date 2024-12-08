<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class TeacherFactory extends Factory
{
    protected static $password;
    public function definition(): array
    {
        return [
            'name' => fake()->firstName() . " " . fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => static::$password ??= Hash::make('password'),
            //'photo' => ,
            'address' => fake()->address(),
            'phone' => fake()->tollFreePhoneNumber(),
            'birthday' => fake()->date(),
            'gender' => fake()->randomElement(['Woman', 'Man']),
        ];
    }
}
