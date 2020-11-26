<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CarResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'car_id' => $this->id,
            'car_model_id' => $this->car_model_id,
            'category_id' => $this->category_id,
            'location_id' => $this->location_id,
            'model_code' => $this->model_code,
            'production_year' => $this->production_year,
            'car_fuel' => $this->fuel,
            'mileage' => $this->mileage,
            'color' => $this->color,
            'status' => $this->status,
            'vehicle_fuel_type' => $this->vehicle_fuel_type,
            'vehicle_gear_box_type' => $this->vehicle_gear_box_type,
            'vehicle_seat_count' => $this->vehicle_seat_count,
            'vehicle_door_count' => $this->vehicle_door_count,
            'description_of_feature' => $this->description_of_feature,
            'car_model' => new CarModelResource($this->model),
            'car_category' => new CarCategoryResource($this->carCategory),

        ];
    }
}
