<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
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

            'customer_id' => $this->customer_id,
            'type_id' => $this->type_id,
            'issued_at' => $this->issued_at,
            'processed_at' => $this->processed_at,
            'finished_at' => $this->finished_at,
            'expired_at' => $this->expired_at,
            'number' => $this->number,
            'name' => $this->name,
            'gender' => $this->gender,
            'status' => $this->status,
            'patient_id' => $this->patient_id,
            'data' => $this->data,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
