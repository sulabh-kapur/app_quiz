<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $temp = $this->faker->text;
        return [
            
            'title' =>$this->faker->title,
            'option1' =>$this->faker->text,
            'option2' =>$this->faker->text,
            'option3' =>$temp,
            'option4' =>$this->faker->text,
            'rightans' =>$temp,
            'subject_id'=>Subject::all()->random()->id,


        ];
    }
}
