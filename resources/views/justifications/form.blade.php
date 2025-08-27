<h6 class="headin-small text-muted mb-4">datos de empleados</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">


            <div class="form-group">

                <label for="form-control-label" form="identification_employee">nombre del empleado</label>
                <input type="text" id="identification_employee" name="identification_employee"
                    class="form-control form-control-alternative" placeholder="ingresar nombre del empleado"
                    value="{{old('identification_employee',$employees->identification_employee)}}">
            </div>


            <div class="form-group">

                <label for="form-control-label" form="state">estado del empleado</label>
                <input type="text" id="state" name="state" class="form-control form-control-alternative"
                    placeholder="ingresar estado del empleado" value="{{old('state',$employees->state)}}">
            </div>









                <div class="form-group">

                    <label for="form-control-label" form="country">pais de empleado</label>
                    <input type="text" id="country" name="country" class="form-control form-control-alternative"
                        placeholder="pais de empleado" value="{{old('country',$employees->country)}}">









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