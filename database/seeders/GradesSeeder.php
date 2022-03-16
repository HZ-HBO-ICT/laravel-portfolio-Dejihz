<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //add
use App\Models\Grades;
use App\Models\Course;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Grades::factory()->times(10)->create();
        DB::table('grades')->insert([
            'course_name' => 'Quatile 1',
            'test_name' => 'Programme and Career Orientation',
            'best_grade' => '7.2'

        ]); 
        DB::table('grades')->insert([
            'course_name' => 'Quatile 1',
            'test_name' => 'Computer Science Basics',
            'best_grade' => '6.0'
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Quatile 1',
            'test_name' => 'Programming Basics',
            'best_grade' => '8.0'
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Quartile 1',
            'test_name' => 'Personal Professional Development',
            'best_grade' => '5.1'
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Quartile 2',
            'test_name' => 'Object-oriented programming',
            'best_grade' => '6.4'
        ]);  

        DB::table('grades')->insert([
            'course_name' => 'Quartile 2',
            'test_name' => 'Object-oriented programming project',
            'best_grade' => '6.3'
        ]);    
        DB::table('grades')->insert([
            'course_name' => 'Quartile 3',
            'test_name' => 'Framework development 1',
            
        ]);  
        DB::table('grades')->insert([
            'course_name' => 'Quartile 3',
            'test_name' => 'Framework project 1',
            
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Quartile 4',
            'test_name' => 'Framework project 2',
            
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Personality',
            'test_name' => 'IT Personality 1',
            
        ]);   
        DB::table('grades')->insert([
            'course_name' => 'Personality',
            'test_name' => 'IT Personality 2',
            
        ]);     
    }
}
