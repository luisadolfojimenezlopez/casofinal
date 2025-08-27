<?php

namespace App\Http\Controllers;
use App\Models\Responsible;

use Illuminate\Http\Request;
use app\Http\Requests\ResponsibleRequest;

class ResponsibleController extends Controller
{


    public function index()
    {
        $responsibles = Responsible::latest()->paginate(5); // Obtenemos todos los responsables

        return view('responsibles.index', compact('responsibles'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $responsibles = new Responsible(); // Creamos un objeto vacío para reutilizar en la vista

    return view('responsibles.create', compact('responsibles'));
}




// Guarda una nueva área en la base de datos
public function store(ResponsibleRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Responsible::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('success', 'Responsable creado con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el responsable seleccionado
    $responsibles = Responsible::find($id);
    return view('responsibles.show', compact('responsibles'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
    $responsibles = Responsible::find($id); // Encontramos el área por su ID

    return view('responsibles.edit', compact('responsibles'));
}






// Actualiza un área existente en la base de datos
public function update(ResponsibleRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $responsibles = Responsible::find($id);
    $responsibles->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('updated', 'Responsable actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $responsibles = Responsible::find($id);
    $responsibles->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('deleted', 'Responsable eliminado con éxito.');
}




}
 


