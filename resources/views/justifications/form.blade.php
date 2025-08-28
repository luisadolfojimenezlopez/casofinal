<h6 class="headin-small text-muted mb-4">datos de empleados</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">


            <div class="form-group">

                <label for="form-control-label" form="id_justification">id de justificación</label>
                <input type="text" id="id_justification" name="id_justification"
                    class="form-control form-control-alternative" placeholder="ingresar id de justificación"
                    value="{{old('id_justification',$justification->id_justification)}}">
            </div>


            <div class="form-group">

                <label for="form-control-label" form="employees_name">estado del empleado</label>
                <input type="text" id="employees_name" name="employees_name" class="form-control form-control-alternative"
                    placeholder="ingresar el nombre del empleado" value="{{old('employees_name',$justification->employees_name)}}">
            </div>



                <div class="form-group">

                    <label for="form-control-label" form="incident_date">dia del incidente</label>
                    <input type="text" id="incident_date" name="incident_date" class="form-control form-control-alternative"
                        placeholder="dia del incidente" value="{{old('incident_date',$justification->incident_date)}}">




 <div class="form-group">

                    <label for="form-control-label" form="type_of_justification">tipo de justificación</label>
                    <input type="text" id="type_of_justification" name="type_of_justification" class="form-control form-control-alternative"
                        placeholder="tipo de justificación" value="{{old('type_of_justification',$justification->type_of_justification)}}">




 <div class="form-group">

          
                    <label for="form-control-label" form="document_type">tipo de documento</label>
                    <input type="text" id="document_type" name="document_type" class="form-control form-control-alternative"
                        placeholder="tipo de documento" value="{{old('document_type',$justification->document_type)}}">








 <div class="form-group">

          
                    <label for="form-control-label" form="late_arrival">tipo de llegada tarde</label>
                    <input type="text" id="late_arrival" name="late_arrival" class="form-control form-control-alternative"
                        placeholder="tipo de llegada tarde" value="{{old('late_arrival',$justification->late_arrival)}}">







            <div class="form-group">

                
                <label for="form-control-label" form="worker_code">código de trabajador</label>
                <input type="text" id="worker_code" name="worker_code" class="form-control form-control-alternative"
                    placeholder="código de trabajador" value="{{old('worker_code',$justification->worker_code)}}">
            </div>

                </div>
            </div>









            <hr class="my-4" />

            <h6 class="heading-small text-muted mb-4">Guardar</h6>

            <div class="pl-lg-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar empleado
                    </button>
                </div>
            </div>