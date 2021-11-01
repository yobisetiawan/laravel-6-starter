<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /**
             * @OA\Parameter(
             *   parameter="ProvinceRequest_title",
             *   name="title",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'title' => 'required',

            /**
             * @OA\Parameter(
             *   parameter="ProvinceRequest_country_id",
             *   name="country_id",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'country_id' => 'required',
        ];
    }
}
