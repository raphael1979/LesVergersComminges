<?php

use Illuminate\Database\Seeder;

class CalibreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
    	DB::table('calibre')->insert([
    		'value' => 'petit',
    		
    		]);
    	DB::table('calibre')->insert([
    		'value' => 'moyen',
    		
    		]);
    	DB::table('calibre')->insert([
    		'value' => 'gros',
    		
    		]);
    }
}
