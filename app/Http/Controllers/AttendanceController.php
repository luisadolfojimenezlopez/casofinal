<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\AttendanceRequest;
use App\Models\Attendance;

class AttendanceController extends Controller

{


    public function index()
    {
        $attendances = Attendance::latest()->paginate(5); // Obtenemos todos los registros de asistencia

        return view('attendances.index', compact('attendances'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $attendances = new Attendance(); // Creamos un objeto vacío para reutilizar en la vista

    return view('attendances.create', compact('attendances'));
}




// Guarda una nueva área en la base de datos
public function store(AttendanceRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Attendance::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('success', 'Registro de asistencia creado con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el registro de asistencia seleccionado
    $attendances = Attendance::find($id);
    return view('attendances.show', compact('attendances'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del registro de asistencia
    $attendances = Attendance::find($id); // Encontramos el registro por su ID

    return view('attendances.edit', compact('attendances'));
}






// Actualiza un área existente en la base de datos
public function update(AttendanceRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $attendances = Attendance::find($id);
    $attendances->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('updated', 'Registro de asistencia actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $attendances = Attendance::find($id);
    $attendances->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('attendances.index')
                     ->with('deleted', 'Registro de asistencia eliminado con éxito.');
}




}
 