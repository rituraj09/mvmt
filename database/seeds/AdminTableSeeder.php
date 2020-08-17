<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
            array('name'=>'Administrator','mobile'=>'7002274743','password' => bcrypt('admin')),
         ));
    }
}
