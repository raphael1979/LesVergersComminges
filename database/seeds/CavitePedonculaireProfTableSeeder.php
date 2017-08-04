<?php

use Illuminate\Database\Seeder;

class CavitePedonculaireProfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cavite_pedonculaire_prof')->insert([
    		'value' => 'oui',
    		]);
    	DB::table('cavite_pedonculaire_prof')->insert([
    		'value' => 'non',
    		]);
    }
}
