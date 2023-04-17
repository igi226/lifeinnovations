<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class Userrequest extends FormRequest
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
       if(Request::route()->getName() == "users.store"){
        return [
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:8",
            "status" => "required|boolean",
        ];
       }elseif(Request::route()->getName() == "users.update"){
        return [
            "name" => "required|string",
            "email" => "required|email",
        ];
       }
        
    }
}
