<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_area' => ['required|string|min:5|max:200', Rule::unique('areas')->ignore($this->area)],
            'human_resources' => 'required|string|min:8|max:50',
            'teaching' => 'required|string|min:10|max:200',
            'security' => 'required|string|max:20',
            'cleaning' => 'required', 'string', 'min:8', 
            'administration' => 'required|string|max:150',
            'accounting' => 'required|string|min:4|max:50',
        ];
    }
    public function messages()
    {
        return [
            'id_area.required' => ' id area es obligatorio',
            'name.string' => 'Solo se permiten caracteres',
            'name.max' => 'Como máximo 200 caracteres',
            'name.min' => 'Como mínimo 5 caracteres',


            'human_resources.required' => 'El campo de recursos humanos es obligatorio',
            'human_resources.string' => 'Solo se permiten caracteres',
            'human_resources.max' => 'Como máximo 50 caracteres',
            'human_resources.min' => 'Como mínimo 8 caracteres',


            'teaching.required' => 'El campo de enseñanza es obligatorio',
            'teaching.string' => 'Solo se permiten caracteres',
            'teaching.max' => 'Como máximo 200 caracteres',
            'teaching.min' => 'Como mínimo 10 caracteres',


            'security.required' => 'El campo de seguridad es obligatorio',
            'security.string' => 'Solo se permiten caracteres',
            'security.max' => 'Como máximo 20 caracteres',


            'cleaning.required' => 'El campo de limpieza es obligatorio',
            'cleaning.string' => 'Solo se permiten caracteres',
            'cleaning.min' => 'Como mínimo 8 caracteres',


            'administration.required' => 'El campo de administración es obligatorio',
            'administration.string' => 'Solo se permiten caracteres',
            'administration.max' => 'Como máximo 150 caracteres',


            'accounting.required' => 'El campo de contabilidad es obligatorio',
            'accounting.string' => 'Solo se permiten caracteres',
            'accounting.min' => 'Como mínimo 4 caracteres',
            'accounting.max' => 'Como máximo 50 caracteres',




        ];
    }
}
