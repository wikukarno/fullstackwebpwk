<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class teacherRequest extends FormRequest
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
            'photo' => 'required|max:255',
            'name' => 'required|max:255',
            'nidn' => 'required|integer',
            'position' => 'required|max:255',
            'education' => 'required|max:255',
            'university' => 'required|max:255',
            'expertise' => 'required|max:255',
            'email' => 'required|max:255',
        ];
    }
}
