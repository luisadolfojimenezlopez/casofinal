<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\JustificationRequest;
use App\Models\Justification;

class JustificationController extends Controller
{


    public function index()
    {
        $justifications = Justification::latest()->paginate(5); // Obtenemos todas las justificaciones

        return view('justifications.index', compact('justifications'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $justification = new Justification(); // Creamos un objeto vacío para reutilizar en la vista

    return view('justifications.create', compact('justification'));
}




// Guarda una nueva área en la base de datos
public function store(JustificationRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Justification::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('success', 'Justificación creada con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con la justificación seleccionada
    $justification = Justification::find($id);
    return view('justifications.show', compact('justification'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
    $justifications = Justification::find($id); // Encontramos el área por su ID

    return view('justifications.edit', compact('justification'));
}






// Actualiza un área existente en la base de datos
public function update(JustificationRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $justification = Justification::find($id);
    $justification->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('updated', 'Justificación actualizada con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $justification = Justification::find($id);
    $justification->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('deleted', 'Justificación eliminada con éxito.');
}




}
 