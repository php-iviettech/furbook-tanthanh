<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('breeds')->insert([
            ['name'=>'Domestic'],
            ['name'=>'Pestion'],
            ['name'=>'Siamege']
        ]);
    }
}
