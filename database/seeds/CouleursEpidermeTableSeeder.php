<?php

use Illuminate\Database\Seeder;

class CouleursEpidermeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('couleurs_epiderme')->insert([
    		'value' => 'rouge',
    		
    		]);

        DB::table('couleurs_epiderme')->insert([
            'value' => 'jaune',
            
            ]);

        DB::table('couleurs_epiderme')->insert([
            'value' => 'vert',
            
            ]);
        
        DB::table('couleurs_epiderme')->insert([
            'value' => 'brun',
            
            ]);
    }
}
