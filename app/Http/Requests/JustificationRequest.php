<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JustificationRequest extends FormRequest
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
            'id_justification' => 'required|exists:justifications,id',
            'reason' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string|max:255',
            'id_employee' => 'required|exists:employees,id',
        ];

    }

    public function messages(): array
    {
        return [
            'id_justification.required' => 'El campo ID de justificación es obligatorio',
            'id_justification.exists' => 'El ID de justificación no existe en la base de datos',

            'reason.required' => 'El campo razón es obligatorio',
            'reason.string' => 'El campo razón debe ser una cadena de texto',
            'reason.max' => 'El campo razón no debe exceder los 255 caracteres',

            'date.required' => 'El campo fecha es obligatorio',
            'date.date' => 'El campo fecha debe ser una fecha válida',

            'status.required' => 'El campo estado es obligatorio',
            'status.string' => 'El campo estado debe ser una cadena de texto',
            'status.max' => 'El campo estado no debe exceder los 255 caracteres',

            'id_employee.required' => 'El campo ID de empleado es obligatorio',
            'id_employee.exists' => 'El ID de empleado no existe en la base de datos',
        ];
        
    }
}
