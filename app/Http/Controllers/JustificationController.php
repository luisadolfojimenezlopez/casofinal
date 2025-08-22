<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\JustificationRequest;
use App\Models\Justification;

class JustificationController extends Controller
{


    public function index(Request $request)
    {
        $justifications = Justification::all();
        return view('justifications.index', compact('justifications'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{
    $justification = new Justification(); // Creamos un objeto vacío para reutilizar en la vista
    return view('justifications.create', compact('justification'));
}




// Guarda una nueva justificación en la base de datos
public function store(JustificationRequest $request)
{
    // Usamos el Form Request para validar y guardar directamente
    Justification::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('success', 'Justificación creada con éxito.');
}





// Muestra los detalles de una justificación específica
public function show(Justification $justification)
{
    // Retornamos la vista con la justificación seleccionada
    return view('justifications.show', compact('justification'));
}






// Muestra el formulario para editar una justificación existente
public function edit(Justification $justification)
{
    // Retornamos la vista de edición con los datos de la justificación
    return view('justifications.edit', compact('justification'));
}






// Actualiza una justificación existente en la base de datos
public function update(JustificationRequest $request, Justification $justification)
{
    // Usamos el Form Request para validar y actualizar directamente
    $justification->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('success', 'Justificación actualizada con éxito.');
}





// Elimina una justificación de la base de datos
public function destroy(Justification $justification)
{
    // Borra la justificación
    $justification->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('justifications.index')
                     ->with('success', 'Justificación eliminada con éxito.');
}




}