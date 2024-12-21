<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUcRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'  => ['required'],
            'tehsilID'  => ['required']
        ];
    }

    public function messages()
    {
        return [
            'tehsilID.required' => 'The Tehsil field is required'
        ];
    }
}
