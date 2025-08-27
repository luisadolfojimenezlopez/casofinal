<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
  
{


    public function index()
    {
        $employees = Employee::latest()->paginate(5); // Obtenemos todos los empleados

        return view('employees.index', compact('employees'));
    }



// Muestra el formulario para crear una nueva área
public function create()
{

    $employees = new Employee(); // Creamos un objeto vacío para reutilizar en la vista

    return view('employees.create', compact('employees'));
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
public function show(int $id)
{
    // Retornamos la vista con el empleado seleccionado
    $employees = Employee::find($id);
    return view('employees.show', compact('employees'));
}






// Muestra el formulario para editar un área existente
public function edit(int $id)

{
    // Retornamos la vista de edición con los datos del área
        $employees = Employee::find($id); // Encontramos el área por su ID

    return view('employees.edit', compact('employees'));
}






// Actualiza un área existente en la base de datos
public function update(EmployeeRequest $request, int $id)
{
    // Usamos el Form Request para validar y actualizar directamente
    $employees = Employee::find($id);
    $employees->update($request->validated());

    // Redirigimos con mensaje de éxito
    return redirect()->route('employees.index')
                     ->with('updated', 'Empleado actualizado con éxito.');
}





// Elimina un área de la base de datos
public function destroy(int $id)
{
    // Borra el área
    $employees = Employee::find($id);
    $employees->delete();

    // Redirige con mensaje de éxito
    return redirect()->route('employees.index')
                     ->with('deleted', 'Empleado eliminado con éxito.');
}




}
 