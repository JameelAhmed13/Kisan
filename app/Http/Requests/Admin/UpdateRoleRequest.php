<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'roleName'  => ['required', 'max:255', 'unique:roles,roleName,'.$this->route('role')->roleID.',roleID'],
        ];
    }
}
