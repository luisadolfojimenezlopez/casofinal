<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\AttendanceRequest;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceController extends Controller

{


    public function index()
    {
        $attendances = Attendance::with('employee')->paginate(5); // Obtenemos todos los registros de asistencia
        return view('attendances.index', compact('attendances', 'employees'));
    }



// Muestra el formulario para crear un nuevo reporte
public function create()
{


    $attendance = new Attendance(); // Creamos un objeto vacío para reutilizar en la vista
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('attendances.create', compact('attendance', 'employees'));
}




// Guarda una nueva área en la base de datos
public function store(AttendanceRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Attendance::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('success', 'Asistencia creada con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el registro de asistencia seleccionado
    $attendance = Attendance::find($id);
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('attendances.show', compact('attendance', 'employees'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del registro de asistencia
   $attendance = Attendance::find($id); // Encontramos el registro de asistencia por su ID
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('attendances.edit', compact('attendance', 'employees'));
}






// Actualiza un área existente en la base de datos
public function update(AttendanceRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $attendance = Attendance::find($id);
    $attendance->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')->with('updated', 'Asistencia actualizada con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $attendance = Attendance::find($id);
    $attendance->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('deleted', 'Asistencia eliminada con éxito.');
}




}