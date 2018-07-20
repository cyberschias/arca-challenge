<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
        $rules = User::$rules;

        $rules['password'] = 'required|alpha_num|min:6';
        $rules['username'] = [
            'required',
            Rule::unique('users'),
        ];

        return $rules;
    }

    /**
     * Get the validation labels that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return User::$rules_labels;
    }
}
