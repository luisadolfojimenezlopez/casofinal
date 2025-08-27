<h6 class="headin-small text-muted mb-4">datos de la asistencia</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">




            <div class="form-group">

                <label for="form-control-label" form="telephone">telefono de empleado</label>
                <input type="number" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="telefono" value="{{old('telephone',$employees->telephone)}}">
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