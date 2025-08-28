@extends('layouts.panel')

@section('title', 'Employees/Show')

@section('content')
<div class="container mt-4" style="color: blue; ">
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">
                            <i class="fas fa-newspaper"></i> Ver sección
                        </h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('employees.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-user"></i> Nombre</label>
                            <p>{{ $employees->name }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                            <p>{{ $employees->address }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-phone"></i> Teléfono</label>
                            <p>{{ $employees->telephone }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-envelope"></i> Email</label>
                            <p>{{ $employees->email }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-briefcase"></i> Profesión</label>
                            <p>{{ $employees->profession }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-calendar-alt"></i> Fecha de ingreso</label>
                            <p>{{ $employees->entry_date }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-id-card"></i> Documento de identidad</label>
                            <p>{{ $employees->ID_document }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label"><i class="fas fa-flag"></i> País</label>
                            <p>{{ $employees->country }}</p>
                        </div>
                    </div>
                </div>

            </div> <!-- card-body -->
        </div> <!-- card -->
    </div> <!-- col-xl-12 -->
</div> <!-- container -->
@endsection
