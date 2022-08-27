<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        return [
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'excerpt' => $this->faker->paragraph(),
            //'body' => '<p>'.implode('</p><p>', $this->faker->paragraphs(8, 16)).'</p>',
            'body' => collect($this->faker->paragraphs(5, 10))
                ->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
