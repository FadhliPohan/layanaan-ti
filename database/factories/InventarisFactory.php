<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventaris>
 */
class InventarisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_barang' => fake()->name(),
            'nomor_inventaris' => fake()->name(),
            'jenis_barang' => fake()->randomDigit(),
            'id_user' => fake()->randomDigit(),
            'lokasi_pengguna' => fake()->paragraph(3),
        ];
    }
}
