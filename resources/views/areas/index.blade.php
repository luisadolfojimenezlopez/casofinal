<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->


    @extends('layouts.panel')
    @section('title', 'Areas')

    @section('content')
    <div class="row" style="color: blue;" >
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">area</h3>
                        <a href="{{ route('areas.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nueva area</i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">id_area</th>
                                <th scope="col">human_resources</th>
                                <th scope="col">security</th>
                                <th scope="col">teaching</th>
                                <th scope="col">cleaning</th>
                                <th scope="col">administration</th>
                                <th scope="col">accounting</th>
                                
                                
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($areas as $area)
                            <tr>
                                <td>{{ $area->id_area}}</td>
                                <td>{{ $area->human_resources }}</td>
                                <td>{{ $area->teaching }}</td>
                                <td>{{ $area->security }}</td>
                                <td>{{ $area->cleaning}}</td>
                                <td>{{ $area->administration}}</td>
                                <td>{{ $area->accounting}}</td>
                               

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('areas.show', $area->id) }}"
                                        class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye">Mostrar</i>
                                    </a>
                                    <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-info btn-sm"
                                        style="margin-right: 5px">
                                        <i class="fas fa-edit">Editar</i>
                                    </a>
                                    <form action="{{ route('areas.destroy', $area->id) }}" method="POST"
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
                        {{ $areas->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>


    @endsection




</div>