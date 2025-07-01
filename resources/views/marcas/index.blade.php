@extends('layouts.plantilla')
    @section('contenido')
    <h1>Listado de Marcas</h1>

    
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
            <a href="/marcas/create" class="btn btn-outline-secondary">
                <i class="bi bi-plus-square"></i>
                Agregar
            </a>
        </div>
    </div>

    <ul class="list-group">
        <!-- Encabezado -->
        <li class="list-group-item d-flex fw-bold bg-light">
            <div class="col-2 border-end">ID</div>
            <div class="col-8 border-end">Marcas</div>
            <div class="col-2 text-end">Acciones</div>
        </li>

        <!-- Datos -->
        @foreach ($marcas as $marca)
        <li class="list-group-item d-flex align-items-center">
            <div class="col-2">{{ $marca->id_marcas }}</div>
            <div class="col-8">{{ $marca->marcas_descripcion }}</div>
            <div class="col-2 text-end">
                <a href="/marcas/edit/{{ $marca->id_marcas }}" class="btn btn-sm btn-outline-secondary me-1">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a href="/marcas/delete/{{ $marca->id_marcas }}" class="btn btn-sm btn-outline-secondary me-1">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
    
@endsection
