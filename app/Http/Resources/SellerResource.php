<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
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

            'name' => $this->name,
            'parent_id' => $this->parent_id,
            'user_id' => $this->user_id,
            'number' => $this->number,
            'regency_id' => $this->regency_id,
            'index' => $this->index,
            'is_active' => $this->is_active,
            'phone' => $this->phone,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
