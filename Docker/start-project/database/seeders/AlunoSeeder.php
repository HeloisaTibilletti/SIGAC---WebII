<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AlunoSeeder extends Seeder {
   
    public function run(): void {

        $data = [
            [   
                "name" => "HELOISA TIBILLETTI",
                "cpf" => "000.000.000-01",
                "email" => "heloisa.tibilletti@gmail.com", 
                "password" => Hash::make('heloisa123'), 
                "user_id" => 2,
                "curso_id" => 2,
                "turma_id" => 6,
            ],
        ];
        DB::table('alunos')->insert($data);
    }
}
