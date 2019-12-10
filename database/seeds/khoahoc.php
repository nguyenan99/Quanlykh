<?php

use Illuminate\Database\Seeder;

class khoahoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('khoahoc')->insert([

    		'ten' => 'Lập trình Java',

    		'ngonngu' => 'Java',

    		'thoigianbatdau' => '2019-10-11',

    		'thoigianketthuc' => '2020-2-11'

    	]);
    }
}
