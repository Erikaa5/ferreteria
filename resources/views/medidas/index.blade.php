@extends('layouts.plantilla')
    @section('contenido')
    <h1>Listado de Medidas</h1>

    
    @if( session('mensaje') )
        <div class="alert alert-{{ session('css') }}">
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="row my-3 d-flex justify-content-between">
        <!-- <div class="col">
            <a href="/inicio" class="btn btn-outline-secondary">
                Listado
            </a>
        </div> -->
        <div class="col text-end">
            <a href="/medidas/create" class="btn btn-outline-secondary">
                <i class="bi bi-plus-square"></i>
                Agregar
            </a>
        </div>
    </div>

    <ul class="list-group">
        <!-- Encabezado -->
        <li class="list-group-item d-flex fw-bold bg-light">
            <div class="col-1 border-end">ID</div>
            <div class="col-4 border-end">Medida</div>
            <div class="col-3 border-end">Abreviatura</div>
            <div class="col-2 border-end">Activo</div>
            <div class="col-2 text-end">Acciones</div>
        </li>

        <!-- Datos -->
        @foreach ($medidas as $medida)
        <li class="list-group-item d-flex align-items-center">
            <div class="col-1">{{ $medida->id_medida }}</div>
            <div class="col-4">{{ $medida->descripcion }}</div>
            <div class="col-3">{{ $medida->abreviatura }}</div>
            <div class="col-2">{{ $medida->activo ? 'Sí' : 'No' }}</div>
            <div class="col-2 text-end">
                <a href="/medidas/edit/{{ $medida->id_medida }}" class="btn btn-sm btn-outline-secondary me-1">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a href="/medidas/delete/{{ $medida->id_medida }}" class="btn btn-sm btn-outline-secondary me-1">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
    
@endsection
