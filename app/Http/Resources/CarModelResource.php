<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'car_model_id' => $this->id,
            'brand' => $this->brand,
            'model' => $this->model,
            'vehicle_type' => $this->vehicle_type,
            'year' => $this->year
        ];
    }
}
