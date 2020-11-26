<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarSoldResource extends JsonResource
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
            'car_sold_id' => $this->id,
            'car_id' => $this->car_id,
            'max_price' => $this->max_price,
            'min_price' => $this->min_price,
            'type' => $this->type,
            'white_book' => $this->white_book,
            'tax_clearancy' => $this->tax_clearancy,
            'last_insurancy' => $this->last_insurancy,
            'caver_image' => $this->image_0,
            'image_1' => $this->image_1,
            'image_2' => $this->image_2,
            'image_3' => $this->image_3,
            'image_4' => $this->image_4,
            'image_5' => $this->image_5,
            'image_6' => $this->image_6,
            'image_7' => $this->image_7,
            'image_8' => $this->image_8,
            'image_9' => $this->image_9,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'car' =>  new CarResource($this->car),

        ];
    }
}
