<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title' => 'required|min:5',
            'alternative_a' => 'required',
            'alternative_b' => 'required',
            'alternative_c' => 'required',
            'alternative_d' => 'required',
            'alternative_e' => 'required',
            'correct' => 'required|in:a,b,c,d,e'
        ];
    }
}
