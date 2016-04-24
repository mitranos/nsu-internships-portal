<?php

use Illuminate\Database\Seeder;

class InternshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('internships')->delete();

        \DB::table('internships')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'user_id' => '1',
                    'professor_id' => '3',
                    'term' => 'Winter',
                    'major' => 'Software Engineering',
                    'agency' => 'Google',
                    'agency_address' => '1600 Amphitheatre Parkway, Mountain View, CA',
                    'agency_website' => 'https://www.google.com',
                    'supervisor' => 'Larry Page',
                    'supervisor_phone' => '+1 (786) 853-2763',
                    'supervisor_email' => 'page@google.com',
                    'offer_letter' => 'This is a blob offer letter',
                    'job_description' => 'This is a blob job description',
                    'status' => '1',
                    'denial_reason' => 'The internship is to far away to be performed.',
                    'created_at' => '2016-04-21 04:30:38',
                ),
            1 =>
                array (
                    'id' => '2',
                    'user_id' => '2',
                    'professor_id' => '3',
                    'term' => 'Winter',
                    'major' => 'Computer Science',
                    'agency' => 'Uber',
                    'agency_address' => '1455 Market St, San Francisco, CA',
                    'agency_website' => 'https://www.uber.com',
                    'supervisor' => 'Travis Kalanick',
                    'supervisor_phone' => '+1 (786) 853-2763',
                    'supervisor_email' => 'travis@uber.com',
                    'offer_letter' => 'This is a blob offer letter',
                    'job_description' => 'This is a blob job description',
                    'status' => '2',
                    'denial_reason' => '',
                    'created_at' => '2016-04-21 04:30:38',
                ),

        ));
    }
}
