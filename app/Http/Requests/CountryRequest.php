<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
             *   parameter="CountryRequest_title",
             *   name="title",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */

            'title' => 'required'
        ];
    }
}
