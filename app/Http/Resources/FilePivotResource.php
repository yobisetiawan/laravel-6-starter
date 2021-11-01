<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilePivotResource extends JsonResource
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

            'file_id' => $this->file_id,
            'ref_id' => $this->ref_id,
            'ref_table' => $this->ref_table,
            'ref_model' => $this->ref_model,
            'relationship' => $this->relationship,
            'index' => $this->index,
            'title' => $this->title,
            'description' => $this->description,
            'is_primary' => $this->is_primary,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
