<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //add
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'By Simply connecting to one of the printers at school.'
        ]);
        DB::table('faqs')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'Use the same printer, scan your paper and it should be added to your pc if you do it right'
        ]);
        DB::table('faqs')->insert([
            'question' => 'What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer' => 'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate for that unusual sickness.'
        ]);
        DB::table('faqs')->insert([
            'question' => 'How can I book a project room?',
            'answer' => 'You can book a room on the HZ page after logging in by pressing the Selfservice Portal, it should be easy from thereon out',
            'link' => 'https://hz.nl/'
        ]);
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'You must park your car "across the road", at the parking lot of the former PEZM'
        ]);
    }
}
