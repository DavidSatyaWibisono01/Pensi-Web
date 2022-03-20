<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengunjungFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'no_tlpn' => $this->faker->phoneNumber,
            'asal_instansi' =>$this->faker->streetName,
        ];
    }
}
