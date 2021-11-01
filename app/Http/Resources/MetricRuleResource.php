<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MetricRuleResource extends JsonResource
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
            'prototype_id' => $this->prototype_id,
            'metric_id' => $this->metric_id,
            'operator' => $this->operator,
            'value' => $this->value,
            'index' => $this->index,
            'is_and' => $this->is_and,
            'is_active' => $this->is_active,
            'remarks' => $this->remarks,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
