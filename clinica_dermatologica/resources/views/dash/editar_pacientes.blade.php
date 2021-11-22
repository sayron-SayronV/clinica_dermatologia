@extends('adminlte::page')

@section('title', 'Clinica Dermatológica| Administador')

@section('content_header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Pacientes</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')


<div class="container-fluid">
  <div class="row">
    <!-- /.col (left) -->
    <div class="col-md-8">
      <div class="card card-primary">
        <div class="card-header">
          <center><strong>
              <h4>Editar Paciente</h4>
            </strong></center>
        </div>

        <div class="card-body">

          <form method="POST" id="frmnuevo" name="frmnuevo" action="/paciente/upd/{{ $pacientesArray['COD_PACIENTE'] }}">
            @csrf
            @method('PUT')

            <div class="form-row">
              <!-- Primer Nombre -->
              <div class="form-group col-md-6">
                <label for="prim_nombre"><b>Primer Nombre</b></label>
                <input type="text" class="form-control" id="prim_nombre" name="prim_nombre" value="{{ $pacientesArray['PRI_NOMBRE'] }}">
              </div>

              <!-- Segundo Nombre -->
              <div class="form-group col-md-6">
                <label for="seg_nombre"><b>Segundo Nombre</b></label>
                <input type="text" class="form-control" id="seg_nombre" name="seg_nombre" value="{{ $pacientesArray['SEG_NOMBRE'] }}">
              </div>

              <!-- Primer Apellido -->
              <div class="form-group col-md-6">
                <label for="prim_apellido"><b>Primer Apellido</b></label>
                <input type="text" class="form-control" id="prim_apellido" name="prim_apellido" value="{{ $pacientesArray['PRI_APELLIDO'] }}">
              </div>

              <!-- Segundo Apellido -->
              <div class="form-group col-md-6">
                <label for="seg_apellido"><b>Segundo Apellido</b></label>
                <input type="text" class="form-control" id="seg_apellido" name="seg_apellido" value="{{ $pacientesArray['SEG_APELLIDO'] }}">
              </div>

              <!-- Genero -->
              <div class="form-group col-md-6">
                <label>Género</label>
                <select class="form-control" style="width: 100%;" name="genero" value="{{ $pacientesArray['GENERO'] }}">
                  <option selected="true">{{ $pacientesArray['GENERO'] }}</option>
                  <option value="Masculino">Masculino</option>
                  <option Value="Femenino">Femenino</option>
                </select>
              </div>

              <!-- Fecha de nacimiento -->
              <div class="form-group col-md-6">
                <label for="fech_nacimiento"><b>Fecha de nacimiento</b></label>
                <input type="date" class="form-control" id="fech_nacimiento" name="fech_nacimiento" value="{{ $pacientesArray['FECHA_NACIMIENTO'] }}" placeholder="{{ $pacientesArray['FECHA_NACIMIENTO'] }}">
              </div>

              <!-- edad-->
              <div class="form-group col-md-6">
                <label for="edad"><b>Edad</b></label>
                <input type="num" class="form-control" id="edad" name="edad" value="{{ $pacientesArray['EDAD'] }}">
              </div>

              <!--Tipo de identidad -->
              <div class="form-group col-md-6">
                <label for="tipo_id"><b>Tipo de identidad</b></label>
                <input type="text" class="form-control" id="tipo_id" name="tipo_id" value="{{ $pacientesArray['TIPO_ID'] }}">
              </div>

              <!--Número de identidad -->
              <div class="form-group col-md-6">
                <label for="num_id_pac"><b>Número de identidad</b></label>
                <input type="text" class="form-control" id="num_id_pac" name="num_id_pac" value="{{ $pacientesArray['NUMERO_ID'] }}">
              </div>

              <!-- Estado de Paciente -->
              <div class="form-group col-md-6">
                <label>Estado de Paciente</label>
                <select class="form-control" style="width: 100%;" name="estado" value="{{ $pacientesArray['ACTIVO_INACTIVO'] }}">
                  <option selected="true">{{ $pacientesArray['ACTIVO_INACTIVO'] }}</option>
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
                </select>
              </div>


              <!--Correo -->
              <div class="form-group col-md-6">
                <label for="correo_pac"><b>Correo</b></label>
                <input type="text" class="form-control" id="correo_pac" name="correo_pac" value="{{ $pacientesArray['CORREO'] }}">
              </div>


              <!--Telefono -->
              <div class="form-group col-md-6">
                <label for="tel_pac"><b>Teléfono</b></label>
                <input type="text" class="form-control" id="tel_pac" name="tel_pac" value="{{ $pacientesArray['TELEFONO'] }}">
              </div>

              <!--Dirección -->
              <div class="form-group col-md-6">
                <label for="direccion"><b>Dirección</b></label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $pacientesArray['DIRECCION'] }}">
              </div>


              <!-- Departamento -->
              <div class="form-group col-md-6">
                <label>Departamento</label>
                <select class="form-control" style="width: 100%;" name="departamento" value="{{ $pacientesArray['DEPARTAMENTO'] }}">
                  <option selected="true">{{ $pacientesArray['DEPARTAMENTO'] }}</option>
                  <option value="Francisco Morazán">Francisco Morazán</option>
                  <option value="Cortés">Cortés</option>
                  <option value="Colón">Colón</option>
                  <option value="Comayagua">Comayagua</option>
                  <option value="Copán">Copán</option>
                  <option value="Choluteca">Choluteca</option>
                  <option value="El Paraíso">El Paraíso</option>
                  <option value="Gracias a Dios">Gracias a Dios</option>
                  <option value="Intibucá">Intibucá</option>
                  <option value="Islas de la Bahía">Islas de la Bahía</option>
                  <option value="La Paz">La Paz</option>
                  <option value="Lempira">Lempira</option>
                  <option value="Ocotepeque">Ocotepeque</option>
                  <option value="Olancho">Olancho</option>
                  <option value="Valle">Valle</option>
                  <option value="Yoro">Yoro</option>
                  <option value="Atlántida">Atlántida</option>
                  <option value="Santa Bárbara">Santa Bárbara</option>
                </select>
              </div>
            </div>

            <div class="modal-header">
              <h5 style="color: teal" class="form-title" id="exampleformLabel"><b>Datos del Encargado</b></h5>
            </div>
            <div class="form-row">

              <!--Nombre encargado-->
              <div class="form-group col-md-6">
                <label for="nom_enc"><b>Nombre</b></label>
                <input type="text" class="form-control" id="nom_enc" name="nom_enc" value="{{ $pacientesArray['NOM_ENCARGADO'] }}">
              </div>

              <!--Número de identidad encargado-->
              <div class="form-group col-md-6">
                <label for="num_id_enc"><b>Número de identidad</b></label>
                <input type="text" class="form-control" id="num_id_enc" name="num_id_enc" value="{{ $pacientesArray['IDENTIFICACION'] }}">
              </div>



              <!--Telefono encargado-->
              <div class="form-group col-md-6">
                <label for="tel_enc"><b>Teléfono</b></label>
                <input type="text" class="form-control" id="tel_enc" name="tel_enc" value="{{ $pacientesArray['TEL_ENCARGADO'] }}">
              </div>

              <!--Parentesco encargado-->
              <div class="form-group col-md-6">
                <label for="parentesco_enc"><b>Parentesco</b></label>
                <input type="text" class="form-control" id="parentesco_enc" name="parentesco_enc" value="{{ $pacientesArray['PARENTESCO'] }}">
              </div>

            </div>

            <div class="modal-footer">
              <a href="/paciente" class="btn btn-warning btn-sm">Cancelar</a>
              <button type="submit" id="btnAgregarnuevo" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
          </form>
          <!-- /.form group -->

          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
      @stop

      @section('footer')

      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="">Clinica Dermatólogia</a>.</strong> All rights reserved.

      @stop

      @section('css')
      <link rel="stylesheet" href="/css/admin_custom.css">
      @stop

      @section('js')
      <script>
        console.log('Hi!');
      </script>

      @stop