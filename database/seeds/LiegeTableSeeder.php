<?php

use Illuminate\Database\Seeder;

class LiegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('liege')->insert([
    		'value' => 'oui',
    		
    		]);
        
    	DB::table('liege')->insert([
    		'value' => 'non',
    		
    		]);
    }
}
