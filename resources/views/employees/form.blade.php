<h6 class="headin-small text-muted mb-4">datos de empleados</h6>


<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">


            <div class="form-group">

                <label for="form-control-label" form="identification_employee">id del empleado</label>
                <input type="number" id="identification_employee" name="identification_employee"
                    class="form-control form-control-alternative" placeholder="ingresar id del empleado"
                    value="{{old('identification_employee',$employees->identification_employee)}}">
            </div>


            <div class="form-group">

                <label for="form-control-label" form="state">nombre del empleado</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="ingresar nombre del empleado" value="{{old('name',$employees->name)}}">
            </div>





            <div class="form-group">

                <label for="form-control-label" form="address">address del empleado</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="address" value="{{old('address',$employees->address)}}">
            </div>


            <div class="form-group">

                <label for="form-control-label" form="telephone">telefono de empleado</label>
                <input type="number" id="telephone" name="telephone" class="form-control form-control-alternative"
                    placeholder="telefono" value="{{old('telephone',$employees->telephone)}}">
            </div>





            <div class="form-group">

                <label for="form-control-label" form="email">email de empleado</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="email" value="{{old('email',$employees->email)}}">
            </div>






            <div class="form-group">

                <label for="form-control-label" form="profession">profesion de empleado</label>
                <input type="text" id="profession" name="profession" class="form-control form-control-alternative"
                    placeholder="profesion" value="{{old('profession',$employees->profession)}}">
            </div>





            <div class="form-group">

                <label for="form-control-label" form="entry_date">fecha de ingreso</label>
                <input type="date" id="entry_date" name="entry_date" class="form-control form-control-alternative"
                    placeholder="entry_date" value="{{old('entry_date',$employees->entry_date)}}">
            </div>







            <div class="form-group">

                <label for="form-control-label" form="ID_document">ID documento</label>
                <input type="text" id="ID_document" name="ID_document" class="form-control form-control-alternative"
                    placeholder="ID_document" value="{{old('ID_document',$employees->ID_document)}}">






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