<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsultationResource extends JsonResource
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


            'doctor_id' => $this->doctor_id,
            'patient_id' => $this->patient_id,
            'customer_id' => $this->customer_id,
            'number' => $this->number,
            'assessment' => $this->assessment,
            'diagnose' => $this->diagnose,
            'treatment' => $this->treatment,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'status' => $this->status,
            'remarks' => $this->remarks,


            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
