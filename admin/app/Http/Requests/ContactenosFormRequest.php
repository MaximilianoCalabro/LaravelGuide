<?php

namespace admin\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactenosFormRequest extends FormRequest
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
            'titulo'='required|max=50';
            'direccion'='required|max=50';
            'numtel'='required';
            'correo'='required|max=250';
        ];
    }
}
