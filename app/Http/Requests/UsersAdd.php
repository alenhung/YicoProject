<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersAdd extends FormRequest
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
          'firstName.required' => '請填寫姓氏',
          'lastName.required' => '請填寫大名',
          'companyName.required' => '請填寫公司名稱',
          'department.required' => '請填寫部門名稱',
          'jobTitle.required' => '請填寫職稱',
          'extTel.required' => '請填寫分機號碼',
          'name.required' => '請填寫使用者帳號',
          'email.required' => '請輸入公司信箱',
          'password.required' => '請輸入密碼',
          'PermissionLevel.required' => '請選擇權限群組',
          'PermissionGroup.required' => '請選擇權限分級',
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
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'companyName' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'jobTitle' => 'required|string|max:255',
        'extTel' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'PermissionLevel' => 'required|string|max:255',
        'PermissionGroup' => 'required|string|max:255',
      ];
    }
}
