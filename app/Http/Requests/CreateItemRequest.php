<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest
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
            //'id' => 'required|min:3|numeric',
            'nombre' =>   'required','regex:/^[a-zA-Z\s]*$/', 'max:20',
            'precio' => 'required|numeric',
            'color'=>'required',
            'material'=>'required',
            'repuesto_dia'=>'required',

        ];
    }
}
