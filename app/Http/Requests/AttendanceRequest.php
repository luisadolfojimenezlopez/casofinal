<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
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


        'id_employee' => 'required|exists:employees,id',
        'entry_time' => 'required|date',
        'departure_time' => 'required|date_format:H:i',
        'attendance_yes_no' => 'nullable|date_format:H:i|after:entry_time',
        'incident_type' => 'required|in:present,absent,leave',
        'observation' => 'nullable|string|max:255',
        'post' => 'nullable|string|max:255',
        'hourtotal' => 'nullable|numeric',
        'justified_document' => 'nullable|string|max:255',
        'date_complete' => 'nullable|date',

    ];
}

public function messages()
{
    return [
        'id_employee.required' => 'El campo id empleado es obligatorio',
        'id_employee.exists' => 'El id empleado no existe en la base de datos',

        'entry_time.required' => 'El campo hora de entrada es obligatorio',
        'entry_time.date' => 'El campo hora de entrada debe ser una fecha válida',

        'departure_time.required' => 'El campo hora de salida es obligatorio',
        'departure_time.date_format' => 'El campo hora de salida debe tener el formato H:i',

        'attendance_yes_no.date_format' => 'El campo asistencia debe tener el formato H:i',
        'attendance_yes_no.after' => 'El campo asistencia debe ser una hora después de la hora de entrada',

        'incident_type.required' => 'El campo tipo de incidente es obligatorio',
        'incident_type.in' => 'El campo tipo de incidente debe ser uno de los siguientes valores: present, absent, leave',

        'observation.string' => 'El campo observación debe ser una cadena de texto',
        'observation.max' => 'El campo observación no debe exceder los 255 caracteres',

        'post.string' => 'El campo puesto debe ser una cadena de texto',
        'post.max' => 'El campo puesto no debe exceder los 255 caracteres',

        'hourtotal.numeric' => 'El campo total de horas debe ser un número',

        'justified_document.string' => 'El campo documento justificado debe ser una cadena de texto',
        'justified_document.max' => 'El campo documento justificado no debe exceder los 255 caracteres',

        'date_complete.date' => 'El campo fecha completa debe ser una fecha válida',
    ];
}
}
