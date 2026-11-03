<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reporte;

class Reporteseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    Reporte::factory()->count(10)->create();
        //Reporte::create([
          //  'user_id' => 1,
            //'descripcion' => 'Bla bla bla',
           // 'ubicacion' => 'Casa X',
            //'fecha_inicio' => now(),
            //'folio' => 'FOLIO12345'
       // ]);

        //DB::table('reportes')->insert([
          //  'user_id' => 1,
           // 'descripcion' => 'Creado con DB',
            //'ubicacion' => 'Casa X',
         //   'fecha_inicio' => now(),
           // 'Created_at' => now(),
           // 'Updated_at' => now()
        //]);
    }
}
