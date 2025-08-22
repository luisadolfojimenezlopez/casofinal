<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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

            'id_schedule' => 'required|integer|exists:schedules,id',
            'evening' => 'required|boolean',
            'continuous_shift' => 'required|boolean',
            'full_time' => 'required|boolean',
            'half_time' => 'required|boolean',
            'morning' => 'required|boolean',
        ];

    }

public function messages(): array
    {
        return [
            'id_schedule.required' => 'El campo ID del horario es obligatorio',
            'id_schedule.integer' => 'El campo ID del horario debe ser un número entero',
            'id_schedule.exists' => 'El ID del horario no existe en la base de datos',

            'evening.required' => 'El campo turno nocturno es obligatorio',
            'evening.boolean' => 'El campo turno nocturno debe ser verdadero o falso',

            'continuous_shift.required' => 'El campo turno continuo es obligatorio',
            'continuous_shift.boolean' => 'El campo turno continuo debe ser verdadero o falso',

            'full_time.required' => 'El campo jornada completa es obligatorio',
            'full_time.boolean' => 'El campo jornada completa debe ser verdadero o falso',

            'half_time.required' => 'El campo jornada parcial es obligatorio',
            'half_time.boolean' => 'El campo jornada parcial debe ser verdadero o falso',

            'morning.required' => 'El campo turno matutino es obligatorio',
            'morning.boolean' => 'El campo turno matutino debe ser verdadero o falso',
        ];
    }


}
