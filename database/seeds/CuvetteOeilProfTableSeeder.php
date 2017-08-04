<?php

use Illuminate\Database\Seeder;

class CuvetteOeilProfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cuvette_oeil_prof')->insert([
    		'value' => 'oui',
    		
    		]);
    	DB::table('cuvette_oeil_prof')->insert([
    		'value' => 'non',
    		
    		]);
    }
}
