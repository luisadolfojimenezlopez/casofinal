<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\AttendanceRequest;
use App\Models\Attendance;

class AttendanceController extends Controller

{
    //



    public function index(Request $request)
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }



// Muestra el formulario para crear una nueva 
public function create()
{
    $attendance = new Attendance(); // Creamos un objeto vacío para reutilizar en la vista
    return view('attendances.create', compact('attendance'));
}




// Guarda una nueva asistencia en la base de datos
public function store(AttendanceRequest $request)
{
    // Usamos el Form Request para validar y guardar directamente
    Attendance::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('success', 'Asistencia creada con éxito.');
}





// Muestra los detalles de un área específica
public function show(Attendance $attendance)
{
    // Retornamos la vista con el área seleccionada
    return view('attendances.show', compact('attendance'));
}






// Muestra el formulario para editar una asistencia existente
public function edit(Attendance $attendance)
{
    // Retornamos la vista de edición con los datos de la asistencia
    return view('attendances.edit', compact('attendance'));
}






// Actualiza una asistencia existente en la base de datos
public function update(AttendanceRequest $request, Attendance $attendance)

{
    // Usamos el Form Request para validar y actualizar directamente
    $attendance->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('success', 'Asistencia actualizada con éxito.');
}





// Elimina un área de la base de datos
public function destroy(Attendance $attendance)
{
    // Borra el área
    $attendance->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('success', 'Asistencia eliminada con éxito.');
}




}

