<?php

use Illuminate\Database\Seeder;
use Faker\Core\DateTime;
class aTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_0465')->insert([
            'judul_artikel' => Str::random(10),
            'tanggal_artikel' => '2003/03/22',
            'deskripsi_artikel' => Str::random(10),
        ]);
    }
}
