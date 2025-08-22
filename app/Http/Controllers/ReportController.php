<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;
use app\Http\Requests\ReportRequest;

class ReportController extends Controller
{
    //


 public function index(Request $request)
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{
    $report = new Report(); // Creamos un objeto vacío para reutilizar en la vista
    return view('reports.create', compact('report'));
}




// Guarda una nueva justificación en la base de datos
public function store(ReportRequest $request)
{
    // Usamos el Form Request para validar y guardar directamente
    Report::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('success', 'Reporte creado con éxito.');
}





// Muestra los detalles de un reporte específico
public function show(Report $report)
{
    // Retornamos la vista con el reporte seleccionado
    return view('reports.show', compact('report'));
}






// Muestra el formulario para editar un reporte existente
public function edit(Report $report)
{
    // Retornamos la vista de edición con los datos del reporte
    return view('reports.edit', compact('report'));
}






// Actualiza un reporte existente en la base de datos
public function update(ReportRequest $request, Report $report)
{
    // Usamos el Form Request para validar y actualizar directamente
    $report->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('success', 'Reporte actualizado con éxito.');
}





// Elimina un reporte de la base de datos
public function destroy(Report $report)
{
    // Borra el reporte
    $report->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('success', 'Reporte eliminado con éxito.');
}


















}
