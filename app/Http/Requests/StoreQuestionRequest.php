<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreQuestionRequest extends FormRequest
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

    public function messages()
    {
        return [
            'title.required' => '標題不能為空',
            'title.min' => '標題不能少於6的字',
            'body.required' => '內容不能為空',
            'body.min' => '內容不能少於26的字',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:196',
            'body' => 'required|min:26',
        ];
    }
}
