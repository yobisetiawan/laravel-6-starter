<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductPriceResource extends JsonResource
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
            'currency_code' => $this->currency_code,
            'is_active' => $this->is_active,
            'published_at' => $this->published_at,
            'depublished_at' => $this->depublished_at,
            'is_published' => $this->is_published,
            'price' => $this->price,
            'min_quantity' => $this->min_quantity,
            'max_quantity' => $this->max_quantity,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
