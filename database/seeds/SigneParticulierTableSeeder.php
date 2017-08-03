<?php

use Illuminate\Database\Seeder;

class SigneParticulierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('signe_particulier')->insert([
    		'value' => '',
    		
    		]);
    }
}
