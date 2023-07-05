<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class db_projectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kategori_id' => mt_rand(1,10),
            'user_id' => mt_rand(1,3),
            'nama_project' => $this->faker->sentence(mt_rand(3,8)),
            'teknologi_yang_dipakai' => $this->faker->words(mt_rand(2,5), true),
            'keterangan' => $this->faker->sentence(20),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode(''),
        ];
    }
}
