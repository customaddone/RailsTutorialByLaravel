<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MicropostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* trueに書き換える */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     // バリデーションルールはFormRequestに書きましょう
     public function rules()
     {
         return [
             'content' => 'required|max:140',
         ];
     }

     public function messages()
     {
         return [
           'content.required' => '本文は必ず入力してください',
           'content.max' => '本文は１４０文字以内にしてください',
        ];
     }
}
