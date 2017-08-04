<?php

use Illuminate\Database\Seeder;

class FormeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('forme')->insert([
    		'value' => 'haute',
    		
    		]);
    	DB::table('forme')->insert([
    		'value' => 'ronde',
    		
    		]);
    	DB::table('forme')->insert([
    		'value' => 'large',
    		
    		]);
    }
}
