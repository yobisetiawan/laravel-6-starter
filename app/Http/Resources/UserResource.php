<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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

            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password_updated_at' => $this->password_updated_at,
            'is_registered' => $this->is_registered,
            'is_active' => $this->is_active,
            'phone' => $this->phone,
            'remember_token' => $this->remember_token,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
