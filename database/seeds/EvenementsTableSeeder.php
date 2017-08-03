<?php

use Illuminate\Database\Seeder;

class EvenementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('evenements')->insert([
    		'name' => 'hellFest',
    		'date'=> '12/12/12',
    		'color' => 'black',
    		'prof' => '-10m',
    		'size' => '10 000m'
    		]);
    }
}