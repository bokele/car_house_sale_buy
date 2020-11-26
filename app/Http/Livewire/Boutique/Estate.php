<?php

namespace App\Http\Livewire\Boutique;

use App\Models\Estate as EstateModel;
use Livewire\Component;
use App\Http\Resources\EstateResource;

class Estate extends Component
{
    public function render()
    {
        $estates = EstateResource::collection(EstateModel::orderBy('id', 'desc')->paginate(20));
        return view('livewire.boutique.estate', ['estates' => $estates]);
    }
}
