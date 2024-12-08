<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'photo' => $this->generatePhotoFile(),
            'address' => fake()->address(),
            'phone' => fake()->tollFreePhoneNumber(),
            'birthday' => fake()->date(),
            'gender' => fake()->randomElement(['Woman', 'Man']),
        ];
    }

    private function generatePhotoFile(): string {
        // Create file photo name for db (with id)
        $photoName = 'teachers/photos/' . Str::uuid() . '.jpg';

        // Download image
        $photoContent = file_get_contents('https://i.pravatar.cc/300');

        // Save image
        Storage::disk('public')->put($photoName, $photoContent);

        // Return name for db save
        return $photoName;
    }
}
