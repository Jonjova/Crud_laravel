<?php
use App\Vivienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class ViviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vivienda::create([
        	'c_habit' => '4',
        	'c_baños' => '4',
        	'colonia' => 'Los Angeles',
        	'precio' => '10000',
        	'tamanio' => '90000',
        	'municipio' => 'soyapango',
        	'departamento' => 'San salvador',
        	'categoria' => 'hogar',
        	'negociable' => 'si',
        	'estado' => 'Hospedable',
        	  
        ]);

        Vivienda::create([
            'c_habit' => '5',
            'c_baños' => '5',
            'colonia' => 'San Sebas',
            'precio' => '100000',
            'tamanio' => '900000',
            'municipio' => 'San Vicente',
            'departamento' => 'San Sebas',
            'categoria' => 'hogar',
            'negociable' => 'si',
            'estado' => 'Hospedable',
              
        ]);
    }
}
