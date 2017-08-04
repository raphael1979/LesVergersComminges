<?php

use Illuminate\Database\Seeder;

class ColorationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('coloration')->insert([
    		'value' => 'oui',
    		]);
        
    	DB::table('coloration')->insert([
    		'value' => 'non',
    		]);
    }
}
