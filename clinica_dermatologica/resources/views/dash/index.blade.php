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
      </div><!-- /.container-fluid -->
      <div class="content">
         
       <style>
         
  .centrado{
    margin-left: auto;
    margin-right: auto;
    width:50%;
    height:50%;
  }
  .centrado{
    margin:10px auto;
    display:block;

         }    
       </style>
            <p style="text-align:center"><strong>BIENVENIDOS <strong> 
                <img src="dash/logo.jpeg"  class="centrado" alt=" logo clinica"></p>
         

           
            
           
            
          
        
      </div>
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