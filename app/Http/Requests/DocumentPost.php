<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentPost extends FormRequest
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
          'title.required' => '公文主旨不能空白',
          'description.required' => '公文描述不能空白',
          'type.required' => '請選擇公文類別',
          'from_to.required' => '請選擇 受文/來文 或者自行輸入',
          'processing_level.required' => '請選擇公文處理時效',
          'secret_level.required' => '請選擇公文密等及解密條件',
          'create_at.required' => '請選擇公文建立日期',
          'create_user.required' => '請輸入公文撰寫人',
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
          'title' => 'required|string|max:255',
          'description' => 'required|string|max:255',
          'from_to' => 'required|string|max:255',
          'type' => 'required|string|max:255',
          'processing_level' => 'required|max:255',
          'secret_level' => 'required|max:255',
          'create_at' => 'required|string|max:255',
          'create_user' => 'required|string|max:255',
          'status' => 'required|max:255',
          'request_user' => 'required|max:255',
          'status' => 'required|max:255',
          'request_user' => 'required|max:266',
        ];
    }
}
