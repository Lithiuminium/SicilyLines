<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ferry_id'=>'bail|required|numeric|between:2,30',
            'equipement_id'=>'bail|required|numeric|between:2,30',
        ];
    }
}
