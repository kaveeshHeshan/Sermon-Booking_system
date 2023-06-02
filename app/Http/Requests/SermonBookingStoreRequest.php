<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SermonBookingStoreRequest extends FormRequest
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
            'description' => 'required|string|min:10|max:255',
            'sermon_day_id' => 'required',
        ];
    }

     /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'sermon_day_id.required' => __('The Sermon Date Selection is mandatory.'),
        ];
    }
}
