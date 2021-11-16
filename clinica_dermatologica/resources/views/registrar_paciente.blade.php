<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clinica Dermatológica | Administador </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper"> 
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Cerrar Secion </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

          <!--div class="image">
            <img src="../../dist/img/logo.jpeg" class="brand-image img-circle elevation-3" alt="User Image">
          </div>-->
          <div class="info">
            <a href="#" class="d-block"> ADMINISTADOR<br> </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Buscar">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

             <li class="nav-item">
              <!--Inicio paciente-->
              <a href="#" class="nav-link">
                <i class="fas fa-users"></i>
                <p>
                  Pacientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Agregar paciente</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-friends"></i>
                    <p>Pacientes</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--fin paciente-->
            <!--Inicio citas-->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-address-book"></i>
                <p>
                  Citas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-plus"></i>
                    <p>Agregar cita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-search"></i>
                    <p>Buscar cita</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--fin  citas-->
            <!--Inicio citas-->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-file-signature"></i>
                <p>
                  Consulta
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-plus"></i>
                    <p>Agregar consulta </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-search"></i>
                    <p>Buscar consulta</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--fin  citas-->

            <!--Inicio calendario-->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-calendar-alt"></i>
                <p>
                  Calendario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                   <i class="fas fa-calendar-day"></i>
                   <p>Agenda</p>
                 </a>
               </li>
             </ul>
           </li>
           <!--fin  calendario-->
           <!--Inicio caja-->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-dollar-sign"></i>
              <p>
                Facturación
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-receipt"></i>
                  <p>Agregar Factura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-search-dollar"></i>
                  <p>Busqueda factura</p>
                </a>
              </li>
            </ul>
          </li>
          <!--fin caja-->
          <!--Inicio expedientes-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-archive"></i>
              <p>
                Expedientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-medical-alt"></i>
                  <p>Expediente</p>
                </a>
              </li>
            </ul>
          </li>
          <!--fin  expedientes-->
          <!--Inicio reporteria-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-file-invoice"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expediente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paciente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Receta medica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota medica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consentimiento info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Receta Examenes</p>
                </a>
              </li>
            </ul>  
          </li> 
          <!--fin reporteria-->
          <!--inicio Dashboard-->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
            <!--fin Dashboard-->
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Registro Paciente</a></li>
                  <li class="breadcrumb-item active">Usuario</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- /.col (left) -->
              <div class="col-md-8">
                <div class="card card-primary">
                  <div class="card-header">
                    <center><strong><h4 >Registrar Paciente</h4></strong></center>
                  </div>

                  <div class="card-body">

                   <form method="POST" id="frmnuevo" name="frmnuevo" action="" >


                    <div class="form-row">
                      <!-- Primer Nombre -->
                      <div class="form-group col-md-6">
                        <label for="prim_nombre"><b>Primer Nombre</b></label>
                        <input type="text" class="form-control" id="prim_nombre" name="prim_nombre">
                      </div>

                      <!-- Segundo Nombre -->
                      <div class="form-group col-md-6">
                        <label for="seg_nombre"><b>Segundo Nombre</b></label>
                        <input type="text" class="form-control" id="seg_nombre" name="seg_nombre">
                      </div>

                      <!-- Primer Apellido -->
                      <div class="form-group col-md-6">
                        <label for="prim_apellido"><b>Primer Apellido</b></label>
                        <input type="text" class="form-control" id="prim_apellido" name="prim_apellido">
                      </div>

                      <!-- Segundo Apellido -->
                      <div class="form-group col-md-6">
                        <label for="seg_apellido"><b>Segundo Apellido</b></label>
                        <input type="text" class="form-control" id="seg_apellido" name="seg_apellido">
                      </div>

                      <!-- Genero -->
                      <div class="form-group col-md-6">
                        <label>Género</label>
                        <select class="form-control" style="width: 100%;">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                      </div>

                      <!-- Fecha de nacimiento -->
                      <div class="form-group col-md-6">
                        <label for="fech_nacimiento"><b>Fecha de nacimiento</b></label>
                        <input type="date" class="form-control" id="fech_nacimiento" name="fech_nacimiento">
                      </div>

                      <!-- edad-->
                      <div class="form-group col-md-6">
                        <label for="edad"><b>Edad</b></label>
                        <input type="num" class="form-control" id="edad" name="edad">
                      </div>

                      <!--Tipo de identidad -->
                      <div class="form-group col-md-6">
                        <label for="tipo_id"><b>Tipo de identidad</b></label>
                        <input type="text" class="form-control" id="tipo_id" name="tipo_id">
                      </div>

                      <!--Número de identidad -->
                      <div class="form-group col-md-6">
                        <label for="num_id_pac"><b>Número de identidad</b></label>
                        <input type="text" class="form-control" id="num_id_pac" name="num_id_pac">
                      </div>

                      <!-- Estado de Paciente -->
                      <div class="form-group col-md-6">
                        <label>Estado de Paciente</label>
                        <select class="form-control" style="width: 100%;">
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>


                      <!--Correo -->
                      <div class="form-group col-md-6">
                        <label for="correo_pac"><b>Correo</b></label>
                        <input type="text" class="form-control" id="correo_pac" name="correo_pac">
                      </div>


                      <!--Telefono -->
                      <div class="form-group col-md-6">
                        <label for="tel_pac"><b>Teléfono</b></label>
                        <input type="text" class="form-control" id="tel_pac" name="tel_pac">
                      </div>

                      <!--Dirección -->
                      <div class="form-group col-md-6">
                        <label for="direccion"><b>Dirección</b></label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                      </div>


                      <!-- Departamento -->
                      <div class="form-group col-md-6">
                        <label>Departamento</label>
                        <select class="form-control" style="width: 100%;">
                          <option>Francisco Morazán</option>
                          <option>Cortés</option>
                          <option>Colón</option>
                          <option>Comayagua</option>
                          <option>Copán</option>
                          <option>Choluteca</option>
                          <option>El Paraíso</option>
                          <option>Gracias a Dios</option>
                          <option>Intibucá</option>
                          <option>Islas de la Bahía</option>
                          <option>La Paz</option>
                          <option>Lempira</option>
                          <option>Ocotepeque</option>
                          <option>Olancho</option>
                          <option>Valle</option>
                          <option>Yoro</option>
                          <option>Atlántida</option>
                          <option>Santa Bárbara</option>
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
                        <input type="text" class="form-control" id="nom_enc" name="nom_enc">
                      </div>

                      <!--Número de identidad encargado-->
                      <div class="form-group col-md-6">
                        <label for="num_id_enc"><b>Número de identidad</b></label>
                        <input type="text" class="form-control" id="num_id_enc" name="num_id_enc">
                      </div>



                      <!--Telefono encargado-->
                      <div class="form-group col-md-6">
                        <label for="tel_enc"><b>Teléfono</b></label>
                        <input type="text" class="form-control" id="tel_enc" name="tel_enc">
                      </div>

                      <!--Parentesco encargado-->
                      <div class="form-group col-md-6">
                        <label for="parentesco_enc"><b>Parentesco</b></label>
                        <input type="text" class="form-control" id="parentesco_enc" name="parentesco_enc">
                      </div>

                    </div>
                    <div class="modal-footer">
                     <button type="submit" id="btnAgregarnuevo" class="btn btn-primary" data-dismiss="modal">REGISTRAR</button>
                   </div>
                 </form>
                 <!-- /.form group -->

                 <!-- /.card-body -->
               </div>
               <!-- /.card -->
             </div>
             <!-- /.container-fluid -->
           </section>
           <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
          </div>
          <strong>Copyright &copy; 2014-2021 <a href="">Clinica Dermatólogia</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Select2 -->
      <script src="../../plugins/select2/js/select2.full.min.js"></script>
      <!-- Bootstrap4 Duallistbox -->
      <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
      <!-- InputMask -->
      <script src="../../plugins/moment/moment.min.js"></script>
      <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
      <!-- date-range-picker -->
      <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
      <!-- bootstrap color picker -->
      <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Bootstrap Switch -->
      <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
      <!-- BS-Stepper -->
      <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
      <!-- dropzonejs -->
      <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>
      <!-- Page specific script -->

      <script>
        $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'DD/MM/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
