<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;

class AddProfessionalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user() instanceof Admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:191',
            'middle_name' => 'sometimes|max:191',
            'last_name' => 'required|max:191',
            'email' => 'required|unique:professionals,email|max:191',
            'degree' => 'required',
            'password' => 'required|max:191|confirmed',
            'phone' => 'sometimes|max:191',
            'country' => 'required|max:2|min:2',
        ];
    }
}
