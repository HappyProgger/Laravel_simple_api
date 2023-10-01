<?php

namespace Database\Seeders;
use Carbon\Carbon;


use Illuminate\Database\Seeder;
use Psy\Util\Str;
use App\Models\Application;
class ApplicationSeeder extends Seeder
{
    protected $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Application::factory()->count(30)->create();






    }
}
