<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GraduationRequest extends FormRequest
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
            'photo' => 'required|image',
            'npm' => 'required|max:10',
            'email' => 'required',
            'name' => 'required|max:23',
            'gender' => 'required',
            'year' => 'required',
            'address' => 'required|max:255',
        ];
    }
}
