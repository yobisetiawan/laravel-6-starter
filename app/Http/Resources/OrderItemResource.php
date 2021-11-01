<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
            'id' => $this->id,
            'uuid' => $this->uuid,

            'product_id' => $this->product_id,
            'order_id' => $this->order_id,
            'quantity' => $this->quantity,
            'category_id' => $this->category_id,
            'category_title' => $this->category_title,
            'title' => $this->title,
            'description' => $this->description,
            'total' => $this->total,
            'price' => $this->price,
            'unit_abbv' => $this->unit_abbv,
            'unit_symbol' => $this->unit_symbol,
            'remarks' => $this->remarks,
            'weight' => $this->weight,
            'data' => $this->data, 

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
