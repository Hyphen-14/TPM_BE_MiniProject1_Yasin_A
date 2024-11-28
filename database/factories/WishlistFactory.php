<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wishlist;

class WishlistFactory extends Factory
{
    protected $model = Wishlist::class;

    public function definition()
    {
        return [
            'user_id' => 1,
            'destination_name' => $this->faker->city,
            'location' => $this->faker->country,
            'reason' => $this->faker->sentence,
            'planned_date' => $this->faker->date(),
        ];
    }
}
