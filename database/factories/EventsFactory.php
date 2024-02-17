<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cars = ['/cars/pc1.jpg',
                '/cars/pc2.jpg',        
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
        $faculties = ['Science','IT & Computer','Business','Law','Media','Education','Engineering'];
        $faculty = Arr::random($faculties);
        return [
            'Title' => fake()->sentence(2),
            'location'  => fake()->city(),
            'date' => fake()->date(),
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'info' => fake()->sentence(10),
            'banner' => Arr::random($cars),
            'faculty' => $faculty,
        ];
    }
}
