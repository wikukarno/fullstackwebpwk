<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StatisticRequest extends FormRequest
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
            'alumni' => 'required|max:255',
            'mahasiswa' => 'required|max:255',
            'dosen' => 'required|max:255',
            'gedung' => 'required|max:255',
            'prestasi' => 'required|max:255',
            'labor' => 'required|max:255',
        ];
    }
}
