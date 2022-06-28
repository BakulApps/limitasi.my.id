<?php

namespace Database\Factories\Member;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_fullname' => 'TemporaryUser',
            'user_email' => 'info@limitasi.my.id',
            'user_password' => Hash::make('Masadepan100'),
            'user_phone' => '08229366506',
            'user_address' => $this->faker->address,
            'user_image' => '#',
            'user_balance' => 0
        ];
    }
}
