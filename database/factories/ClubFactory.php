<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Club;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['Tigresses Sports Club', 'Lionesses Soccer Club', 'Green Football Club', 'Black & Yellow Soccer Club', 'Women in Red Soccer Club', 'Sundays Team Club', 'Party Soccer Club', 'Fun Club', 'Little hoods Soccer Club', 'Croft Sports Club']);
        
        return [
            'name' => $name,
            'coach' => $this->faker->randomElement(['Hanna Sinclair', 'Molly Moulin', 'Brithney Curtis', 'Alexa Stavros', 'Alana Hamilton', 'Hanna Harris', 'Molly Lee', 'Brithney Hunter', 'Alexia Curtis', 'Amber Harrison']),
            'location' => $this->faker->randomElement(['Tennessee', 'Colorado', 'Philadelphia', 'Maryland']),
            'pitch' => $this->faker->paragraph(1),
        ];
    }
}
