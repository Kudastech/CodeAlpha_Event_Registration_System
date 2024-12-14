<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Event::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'venue_id' => Venue::factory(),
            'start_time' => $this->faker->dateTimeBetween('+1 days', '+10 days'),
            'end_time' => $this->faker->dateTimeBetween('+11 days', '+20 days'),
        ];
    }
}
