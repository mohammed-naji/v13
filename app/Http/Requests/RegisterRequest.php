<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'password' => 'required|confirmed',
            'gender' => 'required',
            'education' => 'required',
            'bio' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'جميغ الحقول مطلوبة',
        ];
    }
}
