<?php

namespace database\seeders;
use Carbon\Carbon;


use Illuminate\Database\Seeder;
use Psy\Util\Str;
use App\Models\Bank;
class BankSeeder extends Seeder
{
    protected $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Bank::create([
            "bank_name" => "Bank1",
            "bank_description" => \Illuminate\Support\Str::random(200) ,
        ]);
        Bank::create([
            "bank_name" => "Bank2",
            "bank_description" => \Illuminate\Support\Str::random(200) ,
        ]);
//        DB::table('banks')->insert([
//            "bank_name" => "Bank1",
//            "Bank_description" => \Illuminate\Support\Str::random(200) ,
//        ]);







    }
}
