<?php

use Illuminate\Database\Seeder;

class CuvetteOeilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cuvette_oeil')->insert([
    		'value' => 'etroite',
    		
    		]);
        
        DB::table('cuvette_oeil')->insert([
            'value' => 'large',
            
            ]);
    }
}
