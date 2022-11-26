<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class testRequest extends FormRequest
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
            'ad'=>'required|min:3|max:15',
            'soyad'=>'required|min:3|max:15',
        ];
    }

    public function messages()
    {
        return [
            'ad.required'=>'Ad daxil etmediniz!',
            'ad.min'=>'Ad minimum 3 simvol olmalidir!',
            'ad.max'=>'Ad maksimum 15 simvol olmalidir!',

            'soyad.required'=>'Soyad daxil etmediniz!',
            'soyad.min'=>'Soyad minimum 3 simvul olmalidir!',
            'soyad.max'=>'Soyad maksimum 15 simvul olmalidir!',
           
        ];
    }
}
