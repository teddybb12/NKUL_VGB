<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class sondageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id'=>1,
            'nom'=>'Sondage 1',
            'description'=>'sondage'
        ];
    }
}
