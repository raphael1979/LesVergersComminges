<?php

use Illuminate\Database\Seeder;

class StrieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('strie')->insert([
    		'value' => 'non',
    		
    		]);
    	DB::table('strie')->insert([
    		'value' => 'rouge',
    		
    		]);
    	DB::table('strie')->insert([
    		'value' => 'rouge foncé',
    		
    		]);
    	DB::table('strie')->insert([
    		'value' => 'rouge bordeaux',
    		
    		]);
    }
}
