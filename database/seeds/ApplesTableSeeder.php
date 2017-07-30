<?php

use Illuminate\Database\Seeder;

class ApplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('apples')->insert([
    		'nom'=> 'test',
    		]);
    }
}
