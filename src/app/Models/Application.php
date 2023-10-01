<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ["dealer_name","bank_id","dealer_employee","credit_sum","credit_deadline","interest_rate", "credit_target","status" ];

    public function bank()

    {
//        $application = Application::factory()->count(30)->create();
        return $this->belongsTo(Bank::class,'bank_id');

    }
}
