<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use app\Http\Requests\EmployeeRequest;
class EmployeeController extends Controller

  
{


    public function index(Request $request)
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $employee = new Employee(); // Creamos un objeto vacío para reutilizar en la vista
    return view('employees.create', compact('employee'));
}




// Guarda una nueva área en la base de datos
public function store(EmployeeRequest $request)


{
    // Usamos el Form Request para validar y guardar directamente
    Employee::create($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('employees.index')
                     ->with('success', 'Empleado creado con éxito.');
}





// Muestra los detalles de un área específica
public function show(Employee $employee)
{
    // Retornamos la vista con el empleado seleccionado
    return view('employees.show', compact('employee'));
}






// Muestra el formulario para editar un área existente
public function edit(Employee $employee)
{
    // Retornamos la vista de edición con los datos del área
    return view('employees.edit', compact('employee'));
}






// Actualiza un área existente en la base de datos
public function update(EmployeeRequest $request, Employee $employee)
{
    // Usamos el Form Request para validar y actualizar directamente
    $employee->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('employees.index')
                     ->with('updated', 'Empleado actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $employee = Employee::find($id);
    $employee->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('employees.index')
                     ->with('deleted', 'Empleado eliminado con éxito.');
}




}
 