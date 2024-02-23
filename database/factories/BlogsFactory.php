<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faculties = ['Science','IT & Computer','Business','Law','Media','Education','Engineering'];
        $faculty = Arr::random($faculties);
        $cars = ['/cars/pc 1.jpg',
                '/cars/pc 2.jpg',        
                '/cars/sh1.jpg',        
                '/cars/sh2.jpg',        
                '/cars/sh3.jpg',        
                '/cars/sh4.jpg',        
                '/cars/sh5.jpg',        
                '/cars/sh6.jpg',        
                '/cars/sh7.jpg',        
                '/cars/sh8.jpg',        
                '/cars/sh9.jpg',        
                '/cars/sh10.jpg',        
        ];
        return [
            'user_id' => fake()->numberBetween(10,50),
            'title' => fake()->sentence(2),
            'mini_title' => fake()->sentence(3),
            'description' => fake()->sentence(50),
            'faculty' => $faculty,
            'banner' => Arr::random($cars),
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ];
    }
}
