<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManuscritsRequest extends FormRequest
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
        return [
            
            'firstname' => 'required',
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'genre' => 'required',
            'resume' => 'required',
            'comments' => '',
            'file'=> 'required',
            'descriptionfile'=> 'required',

        ];
    }
}
