<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        'employee_id' => 'required|exists:employees,id',
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'telephono' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:employees,email',
        'profession' => 'required|string|max:255',
        'entry_date' => 'required|date',
        'ID_document' => 'required|string|max:255',
        'country' => 'required|string|max:255',
    ];
}

public function messages()
{
    return [
        'employee_id.required' => 'El campo ID del empleado es obligatorio',
        'employee_id.exists' => 'El ID del empleado no existe en la base de datos',

        'name.required' => 'El campo nombre es obligatorio',
        'name.string' => 'El campo nombre debe ser una cadena de texto',
        'name.max' => 'El campo nombre no debe exceder los 255 caracteres',

        'address.required' => 'El campo dirección es obligatorio',
        'address.string' => 'El campo dirección debe ser una cadena de texto',
        'address.max' => 'El campo dirección no debe exceder los 255 caracteres',

        'telephono.required' => 'El campo teléfono es obligatorio',
        'telephono.string' => 'El campo teléfono debe ser una cadena de texto',
        'telephono.max' => 'El campo teléfono no debe exceder los 255 caracteres',

        'email.required' => 'El campo correo electrónico es obligatorio',
        'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida',
        'email.max' => 'El campo correo electrónico no debe exceder los 255 caracteres',
        'email.unique' => 'El correo electrónico ya está en uso',

        'profession.required' => 'El campo profesión es obligatorio',
        'profession.string' => 'El campo profesión debe ser una cadena de texto',
        'profession.max' => 'El campo profesión no debe exceder los 255 caracteres',

        'entry_date.required' => 'El campo fecha de ingreso es obligatorio',
        'entry_date.date' => 'El campo fecha de ingreso debe ser una fecha válida',

        'ID_document.required' => 'El campo documento de identificación es obligatorio',
        'ID_document.string' => 'El campo documento de identificación debe ser una cadena de texto',
        'ID_document.max' => 'El campo documento de identificación no debe exceder los 255 caracteres',

        'country.required' => 'El campo país es obligatorio',
        'country.string' => 'El campo país debe ser una cadena de texto',
        'country.max' => 'El campo país no debe exceder los 255 caracteres',
    ];
}
}
