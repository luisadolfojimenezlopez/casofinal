<h6 class="headin-small text-muted mb-4">datos de empleados</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">




            <div class="form-group">

                <label for="form-control-label" form="id_area">id del area</label>
                <input type="text" id="id_area" name="id_area" class="form-control form-control-alternative"
                    placeholder="id del area" value="{{old('telephone',$areas->telephone)}}">
            </div>





<div class="form-group">

                <label for="form-control-label" form="human_resources">Recursos Humanos</label>
                <input type="text" id="human_resources" name="human_resources" class="form-control form-control-alternative"
                    placeholder="recursos humanos " value="{{old('human_resources',$areas->human_resources)}}">
            </div>




<div class="form-group">

                <label for="form-control-label" form="teaching">Docencia</label>
                <input type="text" id="teaching" name="teaching" class="form-control form-control-alternative"
                    placeholder="docencia " value="{{old('teaching',$areas->teaching)}}">
            </div>







<div class="form-group">

                <label for="form-control-label" form="security">Seguridad</label>
                <input type="text" id="security" name="security" class="form-control form-control-alternative"
                    placeholder="seguridad" value="{{old('security',$areas->security)}}">
            </div>






<div class="form-group">

                <label for="form-control-label" form="cleaning">limpieza</label>
                <input type="text" id="cleaning" name="cleaning" class="form-control form-control-alternative"
                    placeholder="limpieza" value="{{old('cleaning',$areas->cleaning)}}">
            </div>




<div class="form-group">

                <label for="form-control-label" form="administration">administración</label>
                <input type="text" id="administration" name="administration" class="form-control form-control-alternative"
                    placeholder="administración" value="{{old('administration',$areas->administration)}}">
            </div>











<div class="form-group">

                <label for="form-control-label" form="accounting">contabilidad</label>
                <input type="text" id="accounting" name="accounting" class="form-control form-control-alternative"
                    placeholder="contabilidad" value="{{old('accounting',$areas->accounting)}}">
            </div>




<div class="form-group">

                <label for="form-control-label" form="employee_id">ID del empleado</label>
                <input type="text" id="employee_id" name="employee_id" class="form-control form-control-alternative"
                    placeholder="ID del empleado" value="{{old('employee_id',$areas->employee_id)}}">
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