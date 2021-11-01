<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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

            'number' => $this->number,
            'group_id' => $this->group_id,
            'seller_id' => $this->seller_id,
            'currency_code' => $this->currency_code,
            'amount_item' => $this->amount_item,
            'amount_tax' => $this->amount_tax,
            'amount_discount' => $this->amount_discount,
            'amount_coupon' => $this->amount_coupon,
            'amount_shipping' => $this->amount_shipping,
            'amount_insurance' => $this->amount_insurance,
            'total' => $this->total,
            'total_weight' => $this->total_weight,
            'data' => $this->data,


            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
