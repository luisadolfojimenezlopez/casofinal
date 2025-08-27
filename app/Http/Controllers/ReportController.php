<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;
use app\Http\Requests\ReportRequest;

class ReportController extends Controller
{


    public function index()
    {
        $reports = Report::latest()->paginate(5); // Obtenemos todos los reportes

        return view('reports.index', compact('reports'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $reports = new Report(); // Creamos un objeto vacío para reutilizar en la vista

    return view('reports.create', compact('reports'));
}




// Guarda una nueva área en la base de datos
public function store(ReportRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Report::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('success', 'Reporte creado con éxito.');
}





// Muestra los detalles de un área específica
public function show(int $id)
{
    // Retornamos la vista con el reporte seleccionado
    $reports = Report::find($id);
    return view('reports.show', compact('reports'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
    $reports = Report::find($id); // Encontramos el área por su ID

    return view('reports.edit', compact('reports'));
}






// Actualiza un área existente en la base de datos
public function update(ReportRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $reports = Report::find($id);
    $reports->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('updated', 'Reporte actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $reports = Report::find($id);
    $reports->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('deleted', 'Reporte eliminado con éxito.');
}




}
 



