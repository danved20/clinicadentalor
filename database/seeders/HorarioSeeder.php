<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horarios=["15:00-15:29","15:30-15:59","16:00-16:29","16:30-16:59"];
        foreach($horarios as $horario){
            DB::table('horarios')->insert(['hora'=>$horario
        ]);
        }
    }
}