<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,10),
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(mt_rand(2,5)),
            'excrept' => $this->faker->sentence(10),
            // 'body' => $this->faker->paragraph(mt_rand(3,5)),
            'body' => collect($this->faker->paragraphs(mt_rand(3,5)))->map(function($p){
                return "<p>$p</p>";
            })->implode('')
        ];
    }
}
