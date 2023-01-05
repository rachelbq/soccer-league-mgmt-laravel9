<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $day = $this->faker->randomElement(['2023-01-06', '2023-01-13', '2023-01-20', '2023-01-27', '2023-02-04']);
        
        return [
            'day' => $day,
            'hour' => $this->faker->randomElement(['16:00:00', '18:00:00']),
            'id_local_club' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'id_visitor_club' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'referee' => $this->faker->randomElement(['Lara Croft', 'Barbara Hornbusch', 'Teresa Pérez', 'Hanna Schygulla', 'Yvanna Luss', 'Lolita Cruz', 'Margaret	Smith', 'Olivia	Jones', 'Isla Williams']),
        ];
    }
}