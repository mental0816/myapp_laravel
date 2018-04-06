<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
     *y
     */
    public function rules()
    {
        return [
            //
            'title' => ['required'],
            'content' => ['required', 'min:10'],
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute은(는) 꼭 입력해야되요!',
            'min' => ':attribute은(는) 최소 :min글자 이상이여야 해요!',
        ];
    }

    public function attributes(){
        return [
            'title' => '제목',
            'content' => '본문',
        ];
    }
}
