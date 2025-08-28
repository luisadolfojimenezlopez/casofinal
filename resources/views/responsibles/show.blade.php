@extends('layouts.panel')

@section('title', 'Responsibles/Show')

@section('content')
<div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver secion
                    </h3>


                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('responsibles.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> Nombre
                    </label>
                    <p>{{ $responsible->name }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> correo
                    </label>
                    <p>{{ $responsible->email }}</p>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> telefono
                    </label>
                    <p>{{ $responsible->telephone }}</p>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> id empleado
                    </label>
                    <p>{{ $responsible->employee_id }}</p>
                </div>
            </div>
        </div>






    </div>
</div>
</div>
</div>
@endsection