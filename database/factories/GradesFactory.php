<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Grades;
use App\Models\Course;


class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              // 'courses_id'=> Course::factory(),
              // 'test_name'=> $this->faker->text(),
              // 'best_grade'=> $this->faker->randomFloat(1,0,10)
        ];
    }
}


            