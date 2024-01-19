<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Postrequest extends FormRequest
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
        return [
                'title'=> 'required|min:3|max:100',
                'body'=> 'required|min:10|max:2000',
                'image'=> 'required|mimes:png,jpeg,jpg|max:2048'

        ];
    }
}