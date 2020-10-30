<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePatient extends FormRequest
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
            'nom' => 'bail|required|min:10|max:30',
            'tel' => 'required',
            'adresse' => 'required',
            'dob' => 'required'
        ];
    }
}
