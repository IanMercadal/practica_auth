<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=> 'required|min:6|max:28',
            'capacidad' => 'required|max:2000',
            'descripcion' => 'required|min:10|max:254',
            'fundado' => 'required',
            'entidad' => 'required',
            'terminos'=>'required',
            'avatar' => 'image|max:1024',
        ];
    }
}