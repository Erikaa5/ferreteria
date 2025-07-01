@extends('layouts.plantilla')
    @section('contenido')

    <h1 class="text-center my-4">Panel de Módulos</h1>

<div class="container">
    <table class="table table-bordered text-center">
        <thead class="table-primary">
            <tr>
                <th>Módulo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Productos</td>
                <td><a href="/productos/" class="btn btn-info">Administrar</a></td>
            </tr>
            <tr>
                <td>Clientes</td>
                <td><a href="/clientes/" class="btn btn-info">Administrar</a></td>
            </tr>
            <tr>
                <td>Condición IVA</td>
                <td><a href="/condicioniva/" class="btn btn-info">Administrar</a></td>
            </tr>
            <tr>
                <td>Proveedores</td>
                <td><a href="/proveedores/" class="btn btn-info">Administrar</a></td>
            </tr>
            <tr>
                <td>Marcas</td>
                <td><a href="/marcas/" class="btn btn-info">Administrar</a></td>
            </tr>
            <tr>
                <td>Medidas</td>
                <td><a href="/medidas/" class="btn btn-info">Administrar</a></td>
            </tr>
            
            <tr>
                <td>Provincias</td>
                <td><a href="/provincias/" class="btn btn-info">Administrar</a></td>
            </tr>
        </tbody>
    </table>
</div>

    @endsection
