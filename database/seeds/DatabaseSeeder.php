<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(khoahoc::class);
         $this->call(lophoc::class);
         $this->call(nguoidung::class);
         $this->call(role::class);
    }
}
