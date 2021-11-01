<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrescriptionItemResource extends JsonResource
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

            'prescription_id' => $this->prescription_id,
            'product_id' => $this->product_id,
            'title' => $this->title,
            'description' => $this->description,
            'dosage' => $this->dosage,
            'quantity' => $this->quantity,
            'is_regulated' => $this->is_regulated,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
