<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 1;
        return [
            'id' => $id++,
            'month' => rand(1, 12),
            'price' => rand(1, 200) * 100,
            'description' => 'テキストテキストテキストテキストテキストテキストテキスト',
        ];
    }
}
