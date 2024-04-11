<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FerryRequest extends FormRequest
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
        'NOM'=>'bail|required|between:1,300|alpha',
        'LONGUEUR'=>'bail|required|numeric|between:1,300',
        'LARGEUR'=>'bail|required|numeric|between:1,300',
        'VITESSE'=>'bail|required|numeric|between:1,300',
        'PHOTO'=>'bail|required|image|mimes:jpeg,jpg,png,gif,webp|max:1000',
    ];
}

}
