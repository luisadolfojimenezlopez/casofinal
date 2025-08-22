<?php

namespace App\Http\Controllers;
use App\Models\Responsible;

use Illuminate\Http\Request;
use app\Http\Requests\ResponsibleRequest;

class ResponsibleController extends Controller
{
    //


 public function index(Request $request)
    {
        $responsibles = Responsible::all();
        return view('responsibles.index', compact('responsibles'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{
    $responsible = new Responsible(); // Creamos un objeto vacío para reutilizar en la vista
    return view('responsibles.create', compact('responsible'));
}




// Guarda una nueva justificación en la base de datos
public function store(ResponsibleRequest $request)
{
    // Usamos el Form Request para validar y guardar directamente
    Responsible::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('success', 'Responsable creado con éxito.');
}





// Muestra los detalles de un responsable específico
public function show(Responsible $responsible)
{
    // Retornamos la vista con el responsable seleccionado
    return view('responsibles.show', compact('responsible'));
}






// Muestra el formulario para editar un responsable existente
public function edit(Responsible $responsible)
{
    // Retornamos la vista de edición con los datos del responsable
    return view('responsibles.edit', compact('responsible'));
}






// Actualiza un responsable existente en la base de datos
public function update(ResponsibleRequest $request, Responsible $responsible)
{
    // Usamos el Form Request para validar y actualizar directamente
    $responsible->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('success', 'Responsable actualizado con éxito.');
}





// Elimina un responsable de la base de datos
public function destroy(Responsible $responsible)
{
    // Borra el responsable
    $responsible->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('responsibles.index')
                     ->with('success', 'Responsable eliminado con éxito.');
}


















}
