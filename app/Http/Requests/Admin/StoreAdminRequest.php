<?php

namespace App\Http\Requests\Admin;



use Illuminate\Foundation\Http\FormRequest;


class StoreAdminRequest extends FormRequest
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

        $rules = [
            'name' => 'required|string|max:100|min:3',
            'email' => 'required|email|string|max:200|unique:users',
            'mobile' => 'nullable|unique:users',
            'password' => 'required|max:200|min:6',
            'roles' => 'required',

        ];

        // for ajax
        if (request()['img']) {
            $rules = array_merge($rules, ['img' => 'image|mimes:jpeg,jpg,png|max:1024']);
        }


        return $rules;

    }
}
?>
