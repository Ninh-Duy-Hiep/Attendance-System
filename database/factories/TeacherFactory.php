<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'ma_dinh_danh_gv' => 'GV' . fake()->unique()->randomNumber(3, true),
            'ten_dang_nhap' => fake()->unique()->userName(),
            'mat_khau' => Hash::make(fake()->password()),  // Mật khẩu ngẫu nhiên
            'hinh_anh' => 'https://picsum.photos/640/480',
            'khoa'=> fake()->word(),
        ];
    }
}
