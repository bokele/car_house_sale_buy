<?php

namespace App\Http\Livewire\Boutique;

use App\Models\House;
use Livewire\Component;
use App\Http\Resources\HouseResource;

class House extends Component
{
    public function render()
    {
        $houses = HouseResource::collection(House::orderBy('id', 'desc')->paginate(20));
        return view('livewire.boutique.house', ['houses' => $houses,]);
    }
}
