<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//use Illuminate\Support\DateFactory;
use App\Models\Competition;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoccerMatch>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //$date = $this->faker->DateFactory();
        $day = $this->faker->randomElement(['14th January 2023', '21st January 2023', '28th January 2023', '4th February 2023', '11th February 2023']);
        
        return [
            'day' => $day,
            'slug' => Str::slug($day, '-'), 
            'hour' => $this->faker->randomElement(['16:00', '18:00']),
            'id_local_club' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'id_visitor_club' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'referee' => $this->faker->randomElement(['Lara Croft', 'Barbara Hornbusch', 'Teresa Pérez', 'Hanna Schygulla', 'Yvanna Luss', 'Lolita Cruz', 'Margaret	Smith', 'Olivia	Jones', 'Isla Williams']),
        ];
    }
}