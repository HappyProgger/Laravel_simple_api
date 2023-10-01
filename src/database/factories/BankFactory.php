<?php

namespace database\factories;


use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;




class BankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Bank::class;
    public function definition()
    {

//        $index_of_status = rand(0,3);
        return [
            "bank_name" => $this->faker->country,
            "Bank_description" => Str::random(200) ,

        ];
    }
}
