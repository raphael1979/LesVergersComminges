<?php

use Illuminate\Database\Seeder;

class CavitePedonculaireLargTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cavite_pedonculaire_larg')->insert([
    		'value' => 'etroite',
    		]);
    	DB::table('cavite_pedonculaire_larg')->insert([
    		'value' => 'large',
    		]);
    }
}
