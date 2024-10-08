<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ho_va_ten' => fake()->name(),
            'so_dien_thoai' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'ten_dang_nhap' => fake()->unique()->userName(),
            'mat_khau' => Hash::make(fake()->password()),  // Mật khẩu ngẫu nhiên
            'hinh_anh' => fake()->imageUrl(640, 480, 'people'),
        ];
    }
}
