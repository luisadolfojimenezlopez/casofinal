@extends('layouts.panel')

@section('title', 'Justifications/Show')

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
                    <a href="{{ route('justifications.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> Id de justificacion
                    </label>
                    <p>{{ $justification->id_justification }}</p>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> Nombre de empleado
                    </label>
                    <p>{{ $justification->employees_name }}</p>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> fecha de incidente
                    </label>
                    <p>{{ $justification->incident_date }}</p>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> tipo de incidente
                    </label>
                    <p>{{ $justification->type_of_justification }}</p>
                </div>
            </div>
        </div>




<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> tipo de documento
                    </label>
                    <p>{{ $justification->document_type }}</p>
                </div>
            </div>
        </div>









<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i>llegadas tardes
                    </label>
                    <p>{{ $justification->late_arrival }}</p>
                </div>
            </div>
        </div>





<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i>codigo de trabajador
                        
                    </label>
                    <p>{{ $justification->worker_code }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection