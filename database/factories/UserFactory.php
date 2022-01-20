<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'first_member' => $this->faker->name(),
            'second_member' => $this->faker->name(),
            'first_member_email' => $this->faker->unique()->safeEmail,
            'second_member_email' => $this->faker->unique()->safeEmail,
            'first_member_grade' => $this->faker->numberBetween(1, 12),
            'second_member_grade' => $this->faker->numberBetween(1, 12),
            'category' => 'school',
            'is_admin' => false,
            'question_on' => 1,
            'password' => Hash::make($this->faker->password()),
            'created_at' => now(),
            'updated_at' => now(),
            'auth_token' => Str::random(32),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
