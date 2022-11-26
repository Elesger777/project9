<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class test2Request extends FormRequest
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
            'ish'=>'required|min:3|max:15',
        ];
    }

    public function messages()
    {
        return [
            'ish.required'=>'Ish yeri daxil etmediniz!',
            'ish.min'=>'Ish yeri minimum 3 simvul olmlidir!',
            'ish.max'=>'Ish yeri maksimum 15 simvul olmalidir!'
        ];
    }
}
