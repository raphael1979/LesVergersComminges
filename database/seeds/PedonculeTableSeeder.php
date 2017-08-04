<?php

use Illuminate\Database\Seeder;

class PedonculeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	DB::table('pedoncule')->insert([
    		'value' => 'tres court',
    		
    		]);
    	DB::table('pedoncule')->insert([
    		'value' => 'moyen',
    		
    		]);
    	DB::table('pedoncule')->insert([
    		'value' => 'long',
    		
    		]);
    }
}

