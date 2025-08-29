@extends('layouts.panel')

@section('title', 'Areas/Show')

@section('content')
<div class="col-xl-12 order-xl-1" style="color: blue;">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">
                        <i class="fas fa-newspaper"></i> Ver sección
                    </h3>


                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('areas.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>

      

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> id area
                    </label>
                    <p>{{ $areas->id_area }}</p>
                </div>
            </div>
        </div>









        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> recursos humanos
                    </label>
                    <p>{{ $areas->human_resources }}</p>
                </div>
            </div>
        </div>







<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> docencia
                    </label>
                    <p>{{ $areas->teaching }}</p>
                </div>
            </div>
        </div>





<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> pais
                    </label>
                    <p>{{ $areas->country }}</p>
                </div>
            </div>
        </div>







<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> limpieza
                    </label>
                    <p>{{ $areas->cleaning }}</p>
                </div>
            </div>
        </div>



<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> administracion
                    </label>
                    <p>{{ $areas->administration }}</p>
                </div>
            </div>
        </div>

       
        

<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> contaduria
                    </label>
                    <p>{{ $areas->accounting }}</p>
                </div>
            </div>
        </div>









<div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">
                        <i class="fas fa-calendar-alt"></i> id del empleador
                    </label>
                    <p>{{ $areas->employee_id }}</p>
                </div>
            </div>
        </div>




    </div>
</div>
</div>
</div>
@endsection