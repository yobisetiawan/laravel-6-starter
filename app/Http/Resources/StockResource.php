<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
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
            'seller_id' => $this->seller_id,
            'batch' => $this->batch,
            'expired_at' => $this->expired_at,
            'manufactured_at' => $this->manufactured_at,
            'index' => $this->index,
            'quantity_total' => $this->quantity_total,
            'quantity_buffered' => $this->quantity_buffered,
            'quantity_available' => $this->quantity_available,
            'regency_id' => $this->regency_id,
            'remarks' => $this->remarks,


            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
