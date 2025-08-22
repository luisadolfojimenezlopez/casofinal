<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->


    @extends('layouts.panel')
    @section('title', 'Employees')

    @section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">employee</h3>
                        <a href="{{ route('sections.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo empleado</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">identificacio</th>
                                <th scope="col">nombre</th>
                                <th scope="col">direcion</th>
                                <th scope="col">telefono</th>
                                <th scope="col">profesion</th>
                                <th scope="col">capacidad</th>
                                <th scope="col">capacidad</th>
                                <th scope="col">fecha de ingreso</th>
                                <th scope="col">ID documento</th>
                                <th scope="col">pais</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->identification_employee }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->telephone }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->profession }}</td>
                                <td>{{ $employee->entry_date }}</td>
                                <td>{{ $employee->ID_document }}</td>
                                <td>{{ $employee->country }}</td>


                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('employees.show', $employee->id) }}"
                                        class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye">Mostrar</i>
                                    </a>
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm"
                                        style="margin-right: 5px">
                                        <i class="fas fa-edit">Editar</i>
                                    </a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este empleado? Esta acción no se puede deshacer.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">Eliminar</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $employees->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


    @endsection




</div>