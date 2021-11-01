<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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

            'category_id' => $this->category_id,
            'parent_id' => $this->parent_id,
            'title' => $this->title,
            'description' => $this->description,
            'unit_id' => $this->unit_id,
            'weight' => $this->weight,
            'data' => $this->data,
            'is_active' => $this->is_active,
            'published_at' => $this->published_at,
            'depublished_at' => $this->depublished_at,
            'published' => $this->published,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
