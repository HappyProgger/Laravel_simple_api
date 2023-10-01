<?php

namespace Database\Factories;


use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;




class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Application::class;
    public function definition()
    {
        $statuses = [ 'new', 'in_progress', 'approved', 'rejected'];
//        $index_of_status = rand(0,3);
        return [
            "dealer_name" => $this->faker->country,
            "bank_id" => rand(1,2) ,
            "dealer_employee" => $this->faker->name  ,
            "credit_sum" => rand()%10000  ,
            "credit_deadline" => \Illuminate\Support\Carbon::today()->addDays(rand(0, 100)),
            "interest_rate" =>  rand(12,30),
            "credit_target" => Str::random(12),
            "status" =>   $statuses[rand(0,3)] ,
        ];
    }
}
