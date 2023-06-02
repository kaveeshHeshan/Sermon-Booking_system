<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SermonDayStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:50',
            'date' => 'required|date|unique:sermon_days',
            'description' => 'required|string|min:10|max:255',
        ];
    }
}
