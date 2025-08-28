<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->


    @extends('layouts.panel')
    @section('title', 'Responsibles')

    @section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">responsible</h3>
                        <a href="{{ route('responsibles.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo responsable</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">nombre</th>
                                <th scope="col">email</th>
                                <th scope="col">telefono</th>
                                <th scope="col">employee_id</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responsibles as $responsible)
                            <tr>
                                <td>{{ $responsible->identification_employee }}</td>
                                <td>{{ $responsible->email }}</td>
                                <td>{{ $responsible->telephone }}</td>
                                <td>{{ $responsible->employee_id }}</td>


                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('responsibles.show', $responsible->id) }}"
                                        class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye">Mostrar</i>
                                    </a>
                                    <a href="{{ route('responsibles.edit', $responsible->id) }}" class="btn btn-info btn-sm"
                                        style="margin-right: 5px">
                                        <i class="fas fa-edit">Editar</i>
                                    </a>
                                    <form action="{{ route('responsibles.destroy', $responsible->id) }}" method="POST"
                                        style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este responsable? Esta acción no se puede deshacer.')">
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
                        {{ $responsibles->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


    @endsection




</div>