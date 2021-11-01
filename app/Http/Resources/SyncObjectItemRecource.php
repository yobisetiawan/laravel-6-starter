<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SyncObjectItemRecource extends JsonResource
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
            'origin_column' => $this->origin_column,
            'destination_column' => $this->destination_column,
            'is_pk' => $this->is_pk,
            'is_title' => $this->is_title,
            'data' => $this->data,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
