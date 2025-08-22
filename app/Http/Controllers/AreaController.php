<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use app\Http\Requests\AreaRequest;


class AreaController extends Controller
{
    //



    public function index(Request $request)
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{
    $area = new Area(); // Creamos un objeto vacío para reutilizar en la vista
    return view('area.create', compact('area'));
}




// Guarda una nueva área en la base de datos
public function store(AreaRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Area::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('areas.index')
                     ->with('success', 'Área creada con éxito.');
}





// Muestra los detalles de un área específica
public function show(Area $area)
{
    // Retornamos la vista con el área seleccionada
    return view('areas.show', compact('area'));
}






// Muestra el formulario para editar un área existente
public function edit(Area $area)
{
    // Retornamos la vista de edición con los datos del área
    return view('areas.edit', compact('area'));
}






// Actualiza un área existente en la base de datos
public function update(AreaRequest $request, Area $area)
{
    // Usamos el Form Request para validar y actualizar directamente
    $area->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('areas.index')
                     ->with('success', 'Área actualizada con éxito.');
}





// Elimina un área de la base de datos
public function destroy(Area $area)
{
    // Borra el área
    $area->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('areas.index')
                     ->with('success', 'Área eliminada con éxito.');
}




}
