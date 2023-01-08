<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sperpat>
 */
class SperpatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'no_inventaris' => fake()->randomDigit(),
            'jenis_barang' => fake()->randomDigit(1),
            'qty' => fake()->randomDigit(),
            'tanggal_pembalian' => now(),
        ];
    }
}
