@extends('layouts.plantilla')
    @section('contenido')

    <h1>Listado de Provincias</h1>

    
    @if( session('mensaje') )
    <div class="alert alert-{{ session('css') }}">
        {{ session('mensaje') }}
    </div>
@endif

<div class="row my-3 d-flex justify-content-between">
    <div class="col text-end">
        <a href="/provincias/create" class="btn btn-outline-secondary">
            <i class="bi bi-plus-square"></i>
            Agregar
        </a>
    </div>
</div>

<ul class="list-group">
    <!-- Encabezado -->
    <li class="list-group-item d-flex fw-bold bg-light">
        <div class="col-2 border-end">ID</div>
        <div class="col-8 border-end">Provincia</div>
        <div class="col-2 text-end">Acciones</div>
    </li>

    <!-- Datos -->
    @foreach ($provincias as $provincia)
    <li class="list-group-item d-flex align-items-center">
        <div class="col-2">{{ $provincia->id_provincia }}</div>
        <div class="col-8">{{ $provincia->descripcion }}</div>
        <div class="col-2 text-end">
            <a href="/provincias/edit/{{ $provincia->id_provincia }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="/provincias/delete/{{ $provincia->id_provincia }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </li>
    @endforeach
</ul>

    
@endsection
