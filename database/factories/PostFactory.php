<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = post::class;
    public function definition()
    {
        $title = $this->faker->title ;

        return [
            
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->text,
            'image'=> $this->faker->imageUrl(640,480),
        ];
    }
}