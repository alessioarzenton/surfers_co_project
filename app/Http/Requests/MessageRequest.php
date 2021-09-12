<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'birthplace' => 'required',
            'birthday' => 'required|date',
            'company' => 'required|min:3',
            'phone' => 'required',
            'message' => 'required|min:10',
            'check' => 'required',
        ];
    }
}
