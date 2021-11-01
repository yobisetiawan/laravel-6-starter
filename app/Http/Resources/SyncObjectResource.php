<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SyncObjectResource extends JsonResource
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

            'title' => $this->title,
            'description' => $this->description,
            'origin_table' => $this->origin_table,
            'origin_class' => $this->origin_class,
            'destination_table' => $this->destination_table,
            'destination_class' => $this->destination_class,
            'data' => $this->data,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
