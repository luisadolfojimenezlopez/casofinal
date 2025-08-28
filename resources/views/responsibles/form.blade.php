<h6 class="headin-small text-muted mb-4">datos del responsable</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">




            <div class="form-group">

                <label for="form-control-label" form="identification_employee">identificacion de empleado</label>
                <input type="number" id="identification_employee" name="identification_employee" class="form-control form-control-alternative"
                    placeholder="ingresar identificacion de empleado" value="{{old('email',$responsibles->email)}}">
            </div>




            <div class="form-group">

                <label for="form-control-label" form="email">estado de la responsable</label>
                <input type="text" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="ingresar estado de la responsable" value="{{old('email',$responsibles->email)}}">
            </div>





            <div class="form-group">

                <label for="form-control-label" form="telephone">telefono de la responsable</label>
                <input type="text" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="ingresar telefono de la responsable" value="{{old('telephone',$responsibles->telephone)}}">
            </div>




            <div class="form-group">

                <label for="form-control-label" form="employee_id">telefono del empleado</label>
                <input type="text" id="employee_id" name="employee_id" class="form-control form-control-alternative"
                    placeholder="ingresar telefono del empleado" value="{{old('employee_id',$responsibles->employee_id)}}">
            </div>



                </div>
            </div>




            <hr class="my-4" />

            <h6 class="heading-small text-muted mb-4">Guardar</h6>

            <div class="pl-lg-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="background-color: red;">
                        <i class="fas fa-save"></i> guardar responsable
                    </button>
                </div>
            </div></div>