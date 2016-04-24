<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statuses')->delete();

        \DB::table('statuses')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'name' => 'Denied',
                    'created_at' => '2016-04-21 04:30:38',
                ),
            1 =>
                array (
                    'id' => '2',
                    'name' => 'Pending',
                    'created_at' => '2016-04-21 04:30:38',
                ),
            2 =>
                array (
                    'id' => '3',
                    'name' => 'Approved',
                    'created_at' => '2016-04-21 04:30:38',
                ),

        ));
    }
}
