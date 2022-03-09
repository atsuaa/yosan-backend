<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'created_at' => '2021-12-31',
            'updated_at' => '2022-02-01',
            'color-_id' => 2,
            'name' => '節約対象',
            'description' => 'これを一番節約する！',
        ];
    }
}
