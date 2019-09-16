<?php

use App\Propiedad;
use Illuminate\Database\Seeder;

class PropiedadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propiedad::create([
            'tipo_id' => '1',
            'calle'=>'calle 2',
            'numero'=>'3246',
            'piso'=>'-',
            'dpto'=>'-',
            'estado'=>'libre',
            'zona'=>'centro',
            'cantambientes'=>'5',
            'cantbanos'=>'1',
            'foto'=>'casa1.jpg',
            'observaciones'=>'a 5 cuadras de la estacion de ezpeleta'




        ]);
        Propiedad::create([
            'tipo_id' => '2',
            'calle'=>'calle 4',
            'numero'=>'3244',
            'piso'=>'1',
            'dpto'=>'1b',
            'estado'=>'libre',
            'zona'=>'centro',
            'cantambientes'=>'5',
            'cantbanos'=>'1',
            'foto'=>'depto1.jpg',
            'observaciones'=>'a 5 cuadras de la estacion de ezpeleta'




        ]);
        Propiedad::create([
            'tipo_id' => '3',
            'calle'=>'calle 7',
            'numero'=>'3284',
            'piso'=>'-',
            'dpto'=>'-',
            'estado'=>'libre',
            'zona'=>'centro',
            'cantambientes'=>'2',
            'cantbanos'=>'1',
            'foto'=>'local1.jpg',
            'observaciones'=>'a 5 cuadras de la estacion de ezpeleta'




        ]);
        Propiedad::create([
            'tipo_id' => '6',
            'calle'=>'calle 542',
            'numero'=>'32412',
            'piso'=>'-',
            'dpto'=>'-',
            'estado'=>'libre',
            'zona'=>'centro',
            'cantambientes'=>'0',
            'cantbanos'=>'0',
            'foto'=>'terreno.jpg',
            'observaciones'=>'a 5 cuadras de la estacion de ezpeleta'




        ]);
    }
}
