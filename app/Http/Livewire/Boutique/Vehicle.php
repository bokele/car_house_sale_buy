<?php

namespace App\Http\Livewire\Boutique;

use App\Models\Carsold;
use Livewire\Component;
use App\Http\Resources\CarSoldResource;

class Vehicle extends Component
{
    public function render()
    {

        $car_solds = CarSoldResource::collection(Carsold::orderBy('id', 'desc')->paginate(20));
        return view('livewire.boutique.vehicle', ['car_solds' => $car_solds,]);
    }
}
