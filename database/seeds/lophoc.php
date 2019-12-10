<?php

use Illuminate\Database\Seeder;

class lophoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lophoc')->insert([

    		'ten' => 'PHP cơ bản',

    		'idkhoahoc'=>'1'

    	]);
    }
}
