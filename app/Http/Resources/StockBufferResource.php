<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockBufferResource extends JsonResource
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
            //'id' => $this->id,
            //'uuid' => $this->uuid,

            'stock_id' => $this->stock_id,
            'order_id' => $this->order_id,
            'customer_id' => $this->customer_id,
            'quantity' => $this->quantity,
            'remarks' => $this->remarks,


            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            // 'created_by' => $this->created_by,
            // 'updated_by' => $this->updated_by,
        ];
    }
}
