<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrescriptionResource extends JsonResource
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

            'parent_id' => $this->parent_id,
            'customer_id' => $this->customer_id,
            'doctor_id' => $this->doctor_id,
            'patient_id' => $this->patient_id,
            'number' => $this->number,
            'prescribed_at' => $this->prescribed_at,
            'expired_at' => $this->expired_at,
            'data' => $this->data,
            'status' => $this->status,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
