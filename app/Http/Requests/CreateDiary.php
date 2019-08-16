<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiary extends FormRequest
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
        //validation のルール
        //連想配列でルールは指定
        //keyの部分(title,body)==formのname属性
        //valueの部分 == validationの条件
        //valueを複数指定する場合、| or 配列にする
        return [
            'title' => 'required|max:30', 
            'body' => 'required',
        ];
    }
}
