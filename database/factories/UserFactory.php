<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->firstName(),
            'jenis_kelamin' => fake()->randomElement((['L', 'P'])),
            'nama' => fake()->name(),
            'no_telepon' => fake()->phoneNumber(),
            'level' => fake()->randomElement((['user', 'admin', 'superadmin'])),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('12345'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
