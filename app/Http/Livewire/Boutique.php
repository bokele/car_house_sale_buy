<?php

namespace App\Http\Livewire;

use App\Http\Resources\CarResource;
use App\Http\Resources\CarSoldResource;
use App\Http\Resources\EstateResource;
use App\Http\Resources\HouseResource;
use App\Models\Car;
use App\Models\Carsold;
use App\Models\Estate;
use App\Models\House;
use Livewire\Component;

class Boutique extends Component
{
    public function render()
    {

        // $carSold = Carsold::where
        $cars = CarResource::collection(Car::where('status', '!=', 'delete')->orderBy('id', 'desc')->paginate(8));


        $car_solds = CarSoldResource::collection(Carsold::orderBy('id', 'desc')->paginate(8));

        $houses = HouseResource::collection(House::orderBy('id', 'desc')->paginate(8));
        $estates = EstateResource::collection(Estate::orderBy('id', 'desc')->paginate(8));

        return view('livewire.boutique', ['cars' => $cars, 'car_solds' => $car_solds, 'houses' => $houses, 'estates' => $estates]);
    }
}
