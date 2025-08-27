<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ScheduleRequest;
use App\Models\Schedule;

class ScheduleController extends Controller
{


    public function index()
    {
        $schedules = Schedule::latest()->paginate(5); // Obtenemos todos los horarios

        return view('schedules.index', compact('schedules'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $schedules = new Schedule(); // Creamos un objeto vacío para reutilizar en la vista

    return view('schedules.create', compact('schedules'));
}




// Guarda una nueva área en la base de datos
public function store(ScheduleRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Schedule::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('success', 'Horario creado con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el horario seleccionado
    $schedules = Schedule::find($id);
    return view('schedules.show', compact('schedules'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
    $schedules = Schedule::find($id); // Encontramos el área por su ID

    return view('schedules.edit', compact('schedules'));
}






// Actualiza un área existente en la base de datos
public function update(ScheduleRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $schedules = Schedule::find($id);
    $schedules->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('updated', 'Horario actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $schedules = Schedule::find($id);
    $schedules->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('schedules.index')
                     ->with('deleted', 'Horario eliminado con éxito.');
}




}
 