<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Employee;
use App\Models\Area;
use App\Models\Justification;

use Illuminate\Http\Request;
use app\Http\Requests\ReportRequest;
use App\Models\Responsible;

class ReportController extends Controller
{


    public function index()
    {
        $reports = Report::with('employee')->paginate(5); // Obtenemos todos los reportes
        return view('reports.index', compact('reports', 'employees'));
    }



// Muestra el formulario para crear un nuevo reporte
public function create()
{


    $report = new Report(); // Creamos un objeto vacío para reutilizar en la vista
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('reports.create', compact('report', 'employees'));
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
    $report = Report::find($id);
    $employees = Employee::all(); // Obtenemos todos los empleados
    $responsibles = Responsible::all();
    $areas = Area::all();
    $justifications = Justification::all();
    $responsibles = Responsible::all();

    return view('reports.show', compact('report', 'employees', 'responsibles', 'areas', 'justifications'));

}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del reporte
   $report = Report::find($id); // Encontramos el reporte por su ID
    $employees = Employee::all(); // Obtenemos todos los empleados
    return view('reports.edit', compact('report', 'employees'));
}






// Actualiza un área existente en la base de datos
public function update(ReportRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $report = Report::find($id);
    $report->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('reports.index')->with('updated', 'Reporte actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $report = Report::find($id);
    $report->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('reports.index')
                     ->with('deleted', 'Reporte eliminado con éxito.');
}




}
 
 



