<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTables([
            'tipos','caracteristicas','propiedads','localidads','galerias'
            ]);

        $this->call(TiposTableSeeder::class);
        
        $this->call(CaracteristicasTableSeeder::class);
        $this->call(LocalidadsTableSeeder::class);
        $this->call(PropiedadsTableSeeder::class);
        $this->call(GaleriasTableSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    	
    }
    }

