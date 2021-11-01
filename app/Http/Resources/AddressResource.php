<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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

            'address' => $this->address,
            'regency_id' => $this->regency_id,
            'regency_name' => $this->regency_name,
            'province_name' => $this->province_name,
            'country_code' => $this->country_code,
            'zip' => $this->zip,
            'phone' => $this->phone,
            'landline' => $this->landline,
            'fax' => $this->fax,
            'geo' => $this->geo,
            'email' => $this->email,
            'website' => $this->website,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ];
    }
}
