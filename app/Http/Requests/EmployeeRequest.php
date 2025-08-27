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
        'employee_id' => 'required|exists:employees,id',
    'name'        => 'required|string|min:3|max:255',
    'address'     => 'required|string|min:5|max:255',
    'telefono'    => 'required|string|min:8|max:20',
    'email'       => 'required|email|min:5|max:255|unique:employees,email',
    'profession'  => 'required|string|min:3|max:255',
    'entry_date'  => 'required|date',
    'ID_document' => 'required|string|min:3|max:20',
    'country'     => 'required|string|min:3|max:255',
    ];
}

public function messages()
{
    return [
       'employee_id.required' => 'El campo ID del empleado es obligatorio',
'employee_id.exists'   => 'El ID del empleado no existe en la base de datos',

'name.required' => 'El campo nombre es obligatorio',
'name.string'   => 'El campo nombre debe ser una cadena de texto',
'name.min'      => 'El campo nombre debe tener al menos 3 caracteres',
'name.max'      => 'El campo nombre no debe exceder los 255 caracteres',

'address.required' => 'El campo dirección es obligatorio',
'address.string'   => 'El campo dirección debe ser una cadena de texto',
'address.min'      => 'El campo dirección debe tener al menos 5 caracteres',
'address.max'      => 'El campo dirección no debe exceder los 255 caracteres',

'telefono.required' => 'El campo teléfono es obligatorio',
'telefono.string'   => 'El campo teléfono debe ser una cadena de texto',
'telefono.min'      => 'El campo teléfono debe tener al menos 8 caracteres',
'telefono.max'      => 'El campo teléfono no debe exceder los 20 caracteres',

'email.required' => 'El campo correo electrónico es obligatorio',
'email.email'    => 'El campo correo electrónico debe ser una dirección de correo válida',
'email.min'      => 'El campo correo electrónico debe tener al menos 5 caracteres',
'email.max'      => 'El campo correo electrónico no debe exceder los 255 caracteres',
'email.unique'   => 'El correo electrónico ya está en uso',

'profession.required' => 'El campo profesión es obligatorio',
'profession.string'   => 'El campo profesión debe ser una cadena de texto',
'profession.min'      => 'El campo profesión debe tener al menos 3 caracteres',
'profession.max'      => 'El campo profesión no debe exceder los 255 caracteres',

'entry_date.required' => 'El campo fecha de ingreso es obligatorio',
'entry_date.date'     => 'El campo fecha de ingreso debe ser una fecha válida',

'ID_document.required' => 'El campo documento de identificación es obligatorio',
'ID_document.string'   => 'El campo documento de identificación debe ser una cadena de texto',
'ID_document.min'      => 'El campo documento de identificación debe tener al menos 3 caracteres',
'ID_document.max'      => 'El campo documento de identificación no debe exceder los 20 caracteres',

'country.required' => 'El campo país es obligatorio',
'country.string'   => 'El campo país debe ser una cadena de texto',
'country.min'      => 'El campo país debe tener al menos 3 caracteres',
'country.max'      => 'El campo país no debe exceder los 255 caracteres',

    ];
}
}