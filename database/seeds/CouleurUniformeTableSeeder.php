<?php

use Illuminate\Database\Seeder;

class CouleurUniformeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('couleur_uniforme')->insert([
    		'value' => 'oui',
    		
    		]);
        
    	DB::table('couleur_uniforme')->insert([
    		'value' => 'non',
    		
    		]);
    }
}
