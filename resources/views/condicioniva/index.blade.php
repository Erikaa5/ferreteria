@extends('layouts.plantilla')
    @section('contenido')

    <h1>Listado de Condicion IVA</h1>
    
@if( session('mensaje') )
    <div class="alert alert-{{ session('css') }}">
        {{ session('mensaje') }}
    </div>
@endif

<div class="row my-3 d-flex justify-content-between">
    <div class="col text-end">
        <a href="/condicioniva/create" class="btn btn-outline-secondary">
            <i class="bi bi-plus-square"></i>
            Agregar
        </a>
    </div>
</div>

<ul class="list-group">
    <!-- Encabezado -->
    <li class="list-group-item d-flex fw-bold bg-light">
        <div class="col-2 border-end">ID</div>
        <div class="col-8 border-end">Condición IVA</div>
        <div class="col-2 text-end">Acciones</div>
    </li>

    <!-- Datos -->
    @foreach ($condiciones as $condicion)
    <li class="list-group-item d-flex align-items-center">
        <div class="col-2">{{ $condicion->id_condicioniva }}</div>
        <div class="col-8">{{ $condicion->descripcion }}</div>
        <div class="col-2 text-end">
            <a href="/condicioniva/edit/{{ $condicion->id_condicioniva }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="/condicioniva/delete/{{ $condicion->id_condicioniva }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </li>
    @endforeach
</ul>
    
@endsection
