<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
        $this->call(CalibreTableSeeder::class);
        $this->call(PedonculeTableSeeder::class);
        $this->call(CavitePedonculaireLargTableSeeder::class);
        $this->call(CavitePedonculaireProfTableSeeder::class);
        $this->call(ColorationTableSeeder::class);
        $this->call(CouleursEpidermeTableSeeder::class);
        $this->call(CouleurUniformeTableSeeder::class);
        $this->call(CuvetteOeilProfTableSeeder::class);
        $this->call(CuvetteOeilTableSeeder::class);
        $this->call(FormeTableSeeder::class);
        $this->call(LenticelleTableSeeder::class);
        $this->call(LiegeTableSeeder::class);
        $this->call(PedonculeTableSeeder::class);
        $this->call(SigneParticulierTableSeeder::class);
        $this->call(StrieTableSeeder::class);


    }

}
