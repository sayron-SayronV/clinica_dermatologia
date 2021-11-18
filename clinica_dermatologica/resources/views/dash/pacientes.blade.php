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

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pacientes</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table class="table table-bordered">
                  <thead style="background-color: #2E86C1 ;color: white; font-weight:bold;; font-weight:bold;">
                    <tr>
                      <th style="width: 3%">Nº</th>
                      <th>Paciente</th>
                      <th style="width: 10%">Número de ID</th>
                      <th style="width: 7%">Teléfono</th>
                      <th style="width: 5%">Nombre Encargado</th>
                      <th style="width: 5%">Teléfono Encargado</th>
                      <th style="width: 5%">Fecha Registro</th>
                      <th style="width: 5%">Expediente</th>
                      <th style="width: 5%">Nueva Consulta</th>
                      <th style="width: 5%">Editar</th>
                      <th style="width: 5%">Eliminar</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @php($i = 1)
                  @foreach($pacientesArray as $paciente)  
                  
                    
                  
                  
                  <tr>
                 
                      <td>{{$i++}}</td> 
                      <td>{{ $paciente['PRI_NOMBRE'] }} {{ $paciente['PRI_APELLIDO'] }} {{ $paciente['SEG_APELLIDO'] }}</td>
                      <td>{{ $paciente['NUMERO_ID'] }}</td>
                      <td>{{ $paciente['TELEFONO'] }}</td>
                      <td>{{ $paciente['NOM_ENCARGADO'] }}</td>
                      <td>{{ $paciente['TEL_ENCARGADO'] }}</td>
                      <td>{{ $paciente['FECHA_REGISTRO'] }}</td>

                      <td style="text-align: center;">
                      <a class="btn btn-info btn-sm">Expediente</a>
                      </td>

                      <td style="text-align: center;">
                      <a class="btn btn-success btn-sm">Consulta</a>
                      </td>

                      <td style="text-align: center;">
                      <a href="/paciente/edit/{{ $paciente['COD_PACIENTE'] }}"class="btn btn-warning btn-sm">Editar</a>
                      </td>

                      <td style="text-align: center;">
                        <form method="POST" action="/paciente/delete/{{ $paciente['COD_PACIENTE'] }}">
                            @csrf
                            @method("DELETE")
                           <div class="form-item center">
                           <button type="submit" class="btn-danger btn-sm">Eliminar</button>
                           </div>
                        </form>
                      </td>  
                      
                    </tr>
                  
                   
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

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
    <script> console.log('Hi!'); </script>
   
@stop