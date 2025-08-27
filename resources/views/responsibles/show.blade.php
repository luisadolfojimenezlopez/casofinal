@extends('layouts.panel')

@section('title', 'Employees/Show')

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
                    <a href="{{ route('employees.index') }}" class="btn btn-sm btn-primary">
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
                    <p>{{ $employee->name }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> estado
                    </label>
                    <p>{{ $employee->address }}</p>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> responsable
                    </label>
                    <p>{{ $employee->telephone }}</p>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> ubicacion
                    </label>
                    <p>{{ $employee->email }}</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> tipo
                    </label>
                    <p>{{ $employee->profession }}</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> capacity
                    </label>
                    <p>{{ $employee->entry_date }}</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> capacity
                    </label>
                    <p>{{ $employee->ID_document }}</p>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> country
                    </label>
                    <p>{{ $employee->country }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection