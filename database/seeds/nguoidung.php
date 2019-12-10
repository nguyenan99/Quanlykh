<?php

use Illuminate\Database\Seeder;

class nguoidung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoidung')->insert([
        	'ten'=>'Nguyễn Văn Đàm',
        	'ngaysinh'=>'1998-5-5',
        	'email'=>'dam@gmail.com',
        	'idgroup'=> '1'
        ]);
    }
}
