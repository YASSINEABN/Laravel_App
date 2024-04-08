<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appliance; 


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appliance>
 */
class ApplianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     * 
     */
    protected $model =Appliance::class;
    public function definition()
    {
        return [
            //
        ];
    }
}
