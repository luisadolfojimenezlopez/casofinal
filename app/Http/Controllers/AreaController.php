<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Http\Requests\AreaRequest;

use App\Models\Employee;


class AreaController extends Controller
{


    public function index()
    {
        $areas = Area::with('employee')->paginate(5); // Obtenemos todas las áreas
        return view('areas.index', compact('areas'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $areas = new Area(); // Creamos un objeto vacío para reutilizar en la vista
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('areas.create', compact('areas', 'employees'));
}




// Guarda una nueva área en la base de datos
public function store(AreaRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Area::create($request->validated());
    
    // Redirigimos con mensaje de éxito
    return redirect()->route('areas.index')->with('success', 'Área creada con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el área seleccionada
    $areas = Area::find($id);
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('areas.show', compact('areas', 'employees'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
    $areas = Area::find($id); // Encontramos el área por su ID
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('areas.edit', compact('areas'));
}






// Actualiza un área existente en la base de datos
public function update(AreaRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $areas = Area::find($id);
    $areas->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('areas.index')->with('updated', 'Área actualizada con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $areas = Area::find($id);
    $areas->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('areas.index')->with('deleted', 'Área eliminada con éxito.');
}




}
 