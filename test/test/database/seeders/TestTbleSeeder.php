<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param=[
            [
                'name'=>'taro',
                'email'=>'taro@taro.com',
                'age'=>24
            ],
            [
                'name'=>'sato',
                'email'=>'sato@sato.com',
                'age'=>28
            ],
            [
                'name'=>'kato',
                'email'=>'kato@kato.com',
                'age'=>26
            ]
            ];
            DB::table('people')->insert($param);
    }
}
