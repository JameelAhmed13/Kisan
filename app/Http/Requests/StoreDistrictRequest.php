<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistrictRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'  => ['required'],
            'divisionID'  => ['required']
        ];
    }

    public function messages()
    {
        return [
            'divisionID.required' => 'The Division field is required'
        ];
    }
}
