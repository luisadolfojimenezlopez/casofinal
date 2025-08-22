<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ScheduleRequest;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    //


 public function index(Request $request)
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{
    $schedule = new Schedule(); // Creamos un objeto vacío para reutilizar en la vista
    return view('schedules.create', compact('schedule'));
}




// Guarda una nueva justificación en la base de datos
public function store(ScheduleRequest $request)
{
    // Usamos el Form Request para validar y guardar directamente
    Schedule::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('success', 'Horario creado con éxito.');
}



// Muestra los detalles de un horario específico
public function show(Schedule $schedule)
{
    // Retornamos la vista con el horario seleccionado
    return view('schedules.show', compact('schedule'));
}






// Muestra el formulario para editar un horario existente
public function edit(Schedule $schedule)
{
    // Retornamos la vista de edición con los datos del horario
    return view('schedules.edit', compact('schedule'));
}






// Actualiza un horario existente en la base de datos
public function update(ScheduleRequest $request, Schedule $schedule)
{
    // Usamos el Form Request para validar y actualizar directamente
    $schedule->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('success', 'Horario actualizado con éxito.');
}





// Elimina un horario de la base de datos
public function destroy(Schedule $schedule)
{
    // Borra el horario
    $schedule->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('success', 'Horario eliminado con éxito.');
}






}
