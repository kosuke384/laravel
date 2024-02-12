<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param=[
                'message'=>'Google',
                'url'=>'https://www.google.co.jp'
        ];
        $restdata=new Restdata;
        $restdata->fill($param)->save();
        $param=[
            'message'=>'yahoo',
            'url'=>'https://www.yahoo.co.jp'
    ];
    $restdata=new Restdata;
    $restdata->fill($param)->save();
    $param=[
        'message'=>'msn Japan',
        'url'=>'https://www.msn.com/ja-jp'
];
$restdata=new Restdata;
$restdata->fill($param)->save();
    }
}
