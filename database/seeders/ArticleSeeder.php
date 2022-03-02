<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //add
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('articles')->insert([
            'title' => 'Swot Analysis',
            'excerpt' => 'A personal reflection',
            'body' => 'S: Multitasking, Critical Thinking, Responsible - W: Indentifying where to start, Poor communication - O: Online Communication, Provideed Resaerch Materials - T: Time management'
        ]);
       DB::table('articles')->insert([
            'title' => 'ICT Field Of Work',
            'excerpt' => 'Interesting career options',
            'body' => 'Full Stack Developer: Someone who works with the Back End and Front End of a web application.
Software Developer: The creative, brainstorming masterminds behind computer programs.
Video game developer: A variation of software developer for games'
        ]);
       DB::table('articles')->insert([
            'title' => 'Programming Experiences',
            'excerpt' => 'Known Programing Languages',
            'body' => 'Phython, Javascript, HTML, CSS, SQL'
        ]);
       DB::table('articles')->insert([
            'title' => 'Study Track',
            'excerpt' => 'Learning goals',
            'body' => 'GETTING A DEGREE AND WORK IN A SOFTWARE / VIDEOGAME DEVELOPMENT COMPANY, BEING MORE INDEPENDENT AND UPHOLDING AN EFFICIENT WORK SCHEDULE'
        ]);
    }
}
