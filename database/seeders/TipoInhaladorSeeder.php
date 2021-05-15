<?php

namespace Database\Seeders;

use App\Models\TipoInhalador;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInhaladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {
        DB::table('tipo_inhaladors')->insert([
            'tipo_inhalador' => 'Polvo Seco',
            'cantidad' => 200
        ]);

        DB::table('tipo_inhalador')->insert([
            'tipo_inhalador' => 'Presurisado',
            'cantidad' => 200
        ]);

        DB::table('tipo_inhalador')->insert([
            'tipo_inhalador' => 'No se otro',
            'cantidad' => 200
        ]);
    }
}
