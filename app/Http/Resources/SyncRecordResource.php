<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SyncRecordResource extends JsonResource
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

            'object_id' => $this->object_id,
            'origin_id' => $this->origin_id,
            'destination_id' => $this->destination_id,
            'origin_created_at' => $this->origin_created_at,
            'origin_updated_at' => $this->origin_updated_at,
            'destination_created_at' => $this->destination_created_at,
            'destination_updated_at' => $this->destination_updated_at,
            'data' => $this->data,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
