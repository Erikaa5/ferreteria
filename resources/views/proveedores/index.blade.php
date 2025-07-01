@extends('layouts.plantilla')
    @section('contenido')

    <h1>Listado de Proveedores</h1>

    
@if( session('mensaje') )
    <div class="alert alert-{{ session('css') }}">
        {{ session('mensaje') }}
    </div>
@endif

<div class="row my-3 d-flex justify-content-between">
    <div class="col text-end">
        <a href="/proveedores/create" class="btn btn-outline-secondary">
            <i class="bi bi-plus-square"></i>
            Agregar
        </a>
    </div>
</div>

<ul class="list-group">
    <!-- Encabezado -->
    <li class="list-group-item d-flex fw-bold bg-light">
        <div class="col-1 border-end">ID</div>
        <div class="col-2 border-end">Razón Social</div>
        <div class="col-2 border-end">Teléfono</div>
        <div class="col-2 border-end">Contacto</div>
        <div class="col-2 border-end">CUIT</div>
        <div class="col-2 border-end">Condición IVA</div>
        <div class="col-2">Acciones</div>
    </li>

    <!-- Datos -->
    @foreach ($proveedores as $proveedor)
    <li class="list-group-item d-flex align-items-center">
        <div class="col-1">{{ $proveedor->id_proveedores }}</div>
        <div class="col-2">{{ $proveedor->razon_social }}</div>
        <div class="col-2">{{ $proveedor->telefono_contacto }}</div>
        <div class="col-2">{{ $proveedor->persona_contacto }}</div>
        <div class="col-2">{{ $proveedor->cuit }}</div>
        <div class="col-2">{{ $condiciones[$proveedor->rela_condicioniva] ?? 'Sin definir' }}</div>
        <div class="col-2">
            <a href="/proveedores/edit/{{ $proveedor->id_proveedores }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="/proveedores/delete/{{ $proveedor->id_proveedores }}" class="btn btn-sm btn-outline-secondary me-1">
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </li>
    @endforeach
</ul>

@endsection
