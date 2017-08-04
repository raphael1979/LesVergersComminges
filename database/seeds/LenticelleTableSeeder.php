<?php

use Illuminate\Database\Seeder;

class LenticelleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lenticelle')->insert([
    		'value' => 'oui claires',

    		]);
    	DB::table('lenticelle')->insert([
    		'value' => 'oui foncées',

    		]);
    	DB::table('lenticelle')->insert([
    		'value' => 'non',
    		
    		]);
    }
}
