@extends('layouts.layout')
@section('css')
@include('layouts.css')
@endsection
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card" style="background: #FFFFFF">
                <div class="header" >
                    <div style="float: left">
                        <h2>ABASTECIMIENTO DE COMBUSTIBLE</h2>
                    </div>
                    <div style="float: right;padding-bottom:20px">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerAbastecimiento">
                            <i class="fa fa-plus"></i> COMBUSTIBLE
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th class="text-center">Orden de trabajo</th>
                                    <th class="text-center">Ruta</th>
                                    <th class="text-center">Galones</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($combustibles as $item)
                                    <tr>
                                        <td class="text-center">{{str_pad($item->orders->id, 6, "0", STR_PAD_LEFT)}}</td>
                                        <td class="text-center">{{$item->rutas->punto_inicial}} - {{$item->rutas->punto_final}}</td>
                                        <td class="text-center">{{$item->galones}}</td>
                                        <td class="text-center">{{$item->precio}}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editar_Abastecimientocombustible{{$item->id}}">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#eliminar_Abastecimientocombustible{{$item->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.combustible.modals.register_Abastecimientocombustible')
    @include('pages.combustible.modals.editar_Abastecimientocombustible') 
    @include('pages.combustible.modals.eliminar_Abastecimientocombustible')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection