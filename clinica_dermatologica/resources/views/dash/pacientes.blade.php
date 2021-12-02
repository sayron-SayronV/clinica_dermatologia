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
    <a class="btn btn-primary btn-sm" href="/add_paciente">Agregar Nuevo</a>
  </div>

  <!-- /.card-header -->
  <div class="card-body ">
    <table id="tblpacientes" class="table table-bordered">
      <thead style="background-color: #2E86C1 ;color: white; font-weight:bold;; font-weight:bold;">
        <tr>
          <th style="width: 3%">Nº</th>
          <th>Paciente</th>
          <th style="width: 10%">Número de ID</th>
          <th style="width: 7%">Teléfono</th>
          <th style="width: 5%">Correo</th>
          <th style="width: 5%">Nombre Encargado</th>
          <th style="width: 5%">Teléfono Encargado</th>
          <th style="width: 10%">Fecha Registro</th>
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
          <td>{{ $paciente['CORREO'] }}</td>
          <td>{{ $paciente['NOM_ENCARGADO'] }}</td>
          <td>{{ $paciente['TEL_ENCARGADO'] }}</td>
          <td>{{ date('d/m/y H:i', strtotime($paciente['FECHA_REGISTRO'])) }}</td>

          <td style="text-align: center;">
            <a href="/paciente/edit/{{ $paciente['COD_PACIENTE'] }}" class="btn btn-warning btn-sm">Editar</a>
          </td>

          <td style="text-align: center;">
            <form method="POST" class="formulario-eliminar" action="/paciente/delete/{{ $paciente['COD_PACIENTE'] }}">
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')

<script>
  console.log('Hi!');
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $(document).ready(function() {
    $('#tblpacientes').DataTable({
      "lengthMenu": [
        [5, 10, 20, 50, -1],
        [5, 10, 20, 50, 'All']
      ],
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado - disculpas",
        "info": "Mostrando la página _PAGE_ de _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate": {
          "next": "Siguiente",
          "previous": "Anterior"
        }
      }
    });
  });
</script>


@if (session('eliminar') == 'ok')
<script>
  Swal.fire(
    'Eliminado!',
    'El paciente se elimino con éxito.',
    'success'
  )
</script>

@endif

@if (session('actualizar') == 'ok')
<script>
  Swal.fire(
    'Actualizado!',
    'El paciente se actualizo con éxito.',
    'success'
  )
</script>

@endif

@if (session('agregado') == 'ok')
<script>
  Swal.fire(
    'Agregado!',
    'El paciente se agrego con éxito.',
    'success'
  )
</script>

@endif


<script>
  $('.formulario-eliminar').submit(function(e) {

    e.preventDefault();
    Swal.fire({
      title: '¿Estas seguro?',
      text: "Se eliminaran todos los registros relacionados con el paciente!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        /*Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
          
        )*/

        this.submit();
      }
    })
  });
</script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

@stop