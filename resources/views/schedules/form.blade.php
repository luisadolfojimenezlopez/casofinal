<h6 class="headin-small text-muted mb-4">datos de empleados</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">




            <div class="form-group">

                <label for="form-control-label" form="id_schedule">id del horario</label>
                <input type="text" id="id_schedule" name="id_schedule" class="form-control form-control-alternative"
                    placeholder="ingresar id del horario" value="{{old('id_schedule',$schedules->id_schedule)}}">
            </div>




            <div class="form-group">

                <label for="form-control-label" form="evening">noche</label>
                <input type="text" id="evening" name="evening" class="form-control form-control-alternative"
                    placeholder="ingresar el turno de noche" value="{{old('evening',$schedules->evening)}}">
            </div>






            <div class="form-group">

                <label for="form-control-label" form="continuous_shift">turno continuo</label>
                <input type="text" id="continuous_shift" name="continuous_shift" class="form-control form-control-alternative"
                    placeholder="ingresar el turno continuo" value="{{old('continuous_shift',$schedules->continuous_shift)}}">
            </div>









            <div class="form-group">

                <label for="form-control-label" form="full_time">turno completo</label>
                <input type="text" id="full_time" name="full_time" class="form-control form-control-alternative"
                    placeholder="ingresar el turno completo" value="{{old('full_time',$schedules->full_time)}}">
            </div>




            <div class="form-group">

                <label for="form-control-label" form="half_time">turno medio</label>
                <input type="text" id="half_time" name="half_time" class="form-control form-control-alternative"
                    placeholder="ingresar el turno medio" value="{{old('half_time',$schedules->half_time)}}">
            </div>







            <div class="form-group">

                <label for="form-control-label" form="morning">turno matutino</label>
                <input type="text" id="morning" name="morning" class="form-control form-control-alternative"
                    placeholder="ingresar el turno matutino" value="{{old('morning',$schedules->morning)}}">
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