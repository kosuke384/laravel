<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->path()=='other'){
            return true;
        }else{
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'email',
            'age'=>['numeric',new Myrule(5)]
        ];
    }

    public function messages(){
        return [
            'name.numeric'=>'名前は必ず入力してください',
            'email.email'=>'メールアドレスが必要です',
            'age.numeric'=>'整数でお願いします',
            'age.hello'=>'偶数のみで受け付けます'
        ];
    }
}
