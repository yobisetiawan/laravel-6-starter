<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CouponTemplateResource extends JsonResource
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

            'code' => $this->code,
            'title' => $this->title,
            'description' => $this->description,
            'discount_percentage' => $this->discount_percentage,
            'discount_amount' => $this->discount_amount,
            'discount_max' => $this->discount_max,
            'is_active' => $this->is_active,
            'expired_at' => $this->expired_at,
            'valid_at' => $this->valid_at,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
