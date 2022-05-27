@extends('adminlte::page')

@section('title', 'Gestión de Evaluaciones')

@section('content_header')

@stop

@section('content')
<link rel="stylesheet" href="/css/cargando.css">
<div id="loader"></div>
      
<div>
    <div id="app" data-app>
        <Evaluaciones-Evaluaciones></Evaluaciones-Evaluaciones>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
<?php
    $roles_check = '';

    foreach (Session::get('usuario')->user_roles as $role)
    {
        $roles_check = $roles_check == '' ? $role->rol->name : $roles_check .','. $role->rol->name;
    }
?>
@section('js')
    <script>
        var rol        = '{{$roles_check}}';
        var usuario    = '{{Session::get('usuario')->email}}';
        var docente_id = '{{isset($docente->id) ? $docente->id : 0}}'; 
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/permisos.js')}}?{{time()}}"></script>
    <script> console.log('Hit'); </script>
@stop 
