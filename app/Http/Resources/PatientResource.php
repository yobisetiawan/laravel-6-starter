<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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

            'user_id' => $this->user_id,
            'number' => $this->number,
            'name' => $this->name,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'pob' => $this->pob,
            'uuid' => $this->uuid,
            'email' => $this->email,
            'phone' => $this->phone,
            'is_active' => $this->is_active,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
