<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aduan>
 */
class AduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomor_aduan' => fake()->randomDigit(),
            'nama_pengadu' => fake()->name(),
            'nama_teknisi' => fake()->name(),
            'jenis_aduan' => fake()->randomDigit(),
            'deskripsi_aduan' => fake()->sentence(5),
        ];
    }
}
