<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegencyRequest extends FormRequest
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
             *   parameter="RegencyRequest_name",
             *   name="name",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'name' => 'required',

            /**
             * @OA\Parameter(
             *   parameter="RegencyRequest_parent_id",
             *   name="parent_id",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'parent_id' => 'required',
        ];
    }
}
