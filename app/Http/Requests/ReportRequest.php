<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
    'id_report' => 'required|integer',
    'day_generated' => 'required|date',
    'responsible_id' => 'required|integer|exists:responsibles,id',
    'employee_id' => 'required|integer|exists:employees,id',
    'area_id' => 'required|integer|exists:areas,id',
    'schedule_id' => 'required|integer|exists:schedules,id',
    'justification_id' => 'required|integer|exists:justifications,id',
];

    }

    public function messages()
    {
        return [
            'id_report.required' => 'El campo ID del reporte es obligatorio',
            'id_report.integer' => 'El campo ID del reporte debe ser un número entero',

            'day_generated.required' => 'El campo fecha de generación es obligatorio',
            'day_generated.date' => 'El campo fecha de generación debe ser una fecha válida',

            'responsible_id.required' => 'El campo ID del responsable es obligatorio',
            'responsible_id.integer' => 'El campo ID del responsable debe ser un número entero',
            'responsible_id.exists' => 'El ID del responsable no existe en la base de datos',

            'employee_id.required' => 'El campo ID del empleado es obligatorio',
            'employee_id.integer' => 'El campo ID del empleado debe ser un número entero',
            'employee_id.exists' => 'El ID del empleado no existe en la base de datos',

            'area_id.required' => 'El campo ID del área es obligatorio',
            'area_id.integer' => 'El campo ID del área debe ser un número entero',
            'area_id.exists' => 'El ID del área no existe en la base de datos',

            'schedule_id.required' => 'El campo ID del horario es obligatorio',
            'schedule_id.integer' => 'El campo ID del horario debe ser un número entero',
            'schedule_id.exists' => 'El ID del horario no existe en la base de datos',

            'justification_id.required' => 'El campo ID de justificación es obligatorio',
            'justification_id.integer' => 'El campo ID de justificación debe ser un número entero',
            'justification_id.exists' => 'El ID de justificación no existe en la base de datos',
        ];
    }
}
