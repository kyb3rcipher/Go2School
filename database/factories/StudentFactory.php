<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected static ?string $password = null;

    public function definition(): array
    {
        return [
            'name' => fake()->firstName() . " " . fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password' => static::$password ??= Hash::make('password'),
            'photo' => $this->generatePhotoFile(),
            'phone' => fake()->tollFreePhoneNumber(),
            'address' => fake()->address(),
            'gender' => fake()->randomElement(['Woman', 'Man']),
            'birthday' => fake()->date(),
            'blood_type' => 'A+',
            'group_id' => '1',
        ];
    }

    private function generatePhotoFile(): string {
        // Create file photo name for db (with id)
        $photoName = 'students/photos/' . Str::uuid() . '.jpg';

        // Download image
        $photoContent = file_get_contents('https://i.pravatar.cc/300');

        // Save image
        Storage::disk('public')->put($photoName, $photoContent);

        // Return name for db save
        return $photoName;
    }
}
