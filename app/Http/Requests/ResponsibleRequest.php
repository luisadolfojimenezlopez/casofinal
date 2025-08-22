<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResponsibleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //


        'id_responsible' => 'required|integer|exists:responsibles,id',
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:responsibles,email',
        'phone' => 'required|string|max:20',


        ];
    }

public function messages(): array
    {
        return [
            'id_responsible.required' => 'El campo ID del responsable es obligatorio',
            'id_responsible.integer' => 'El campo ID del responsable debe ser un número entero',
            'id_responsible.exists' => 'El ID del responsable no existe en la base de datos',

            'name.required' => 'El campo nombre es obligatorio',
            'name.string' => 'El campo nombre debe ser una cadena de texto',
            'name.max' => 'El campo nombre no debe exceder los 255 caracteres',

            'email.required' => 'El campo correo electrónico es obligatorio',
            'email.string' => 'El campo correo electrónico debe ser una cadena de texto',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida',
            'email.max' => 'El campo correo electrónico no debe exceder los 255 caracteres',
            'email.unique' => 'El correo electrónico ya está en uso',

            'phone.required' => 'El campo teléfono es obligatorio',
            'phone.string' => 'El campo teléfono debe ser una cadena de texto',
            'phone.max' => 'El campo teléfono no debe exceder los 20 caracteres',
        ];
    }



}
