<?php

namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;


class UpdateAdminRequest extends FormRequest
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
        $user_id = $this->user_id;
        $rules = [
            'name'     => 'required|string|max:100|min:3' ,
            'email'    => 'required|email|string|max:200|unique:users,email,' . $user_id ,
            'mobile'   => 'nullable|unique:users,mobile,' . $user_id ,
            'password' => 'nullable|max:200|min:6' ,
            'roles'    => 'required' ,
        ];

        // for ajax
        if (request()['img'] != "null")
        {
            $rules = array_merge($rules , ['img' => 'image|mimes:jpeg,jpg,png|max:1024']);
        }

        return $rules;

    }
}
