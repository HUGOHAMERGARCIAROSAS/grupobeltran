@extends('layouts.layout')
@section('css')
@include('layouts.css')
@include('layouts.select2css')
@endsection
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card" style="background: #FFFFFF">
                <div class="header" >
                    <div style="float: left">
                        <h2>TARIFAS</h2>
                    </div>
                    <div style="float: right">
                        @can('haveaccess','tarifas.create')
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerTarifa">
                            <i class="fa fa-plus"></i> NUEVA TARIFA
                        </button>
                        @endcan
                    </div>
                </div>
                <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('tarifas.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('tarifas.export.excel')}}"  class="btn btn-warning">
                            <i class="fa fa-download"></i> EXCEL</a>
                        <a href="#"  class="btn btn-warning" data-toggle="modal" data-target="#importExcel">
                            <i class="fa fa-upload"></i>
                            EXCEL</a>
                        
                    </div>                        
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CLIENTE</th>
                                    <th>TIPO DE SERVICIO</th>
                                    <th>TIPO</th>
                                    <th>RUTA</th>
                                    <th>PRECIO</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tarifas as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->cliente->razon_social}}</td>
                                    <td>{{$item->tipo}}</td> 
                                    <td>{{$item->tipo_servicio}}</td>
                                    <td>{{$item->ruta}}</td>
                                    <td>{{$item->precio}}</td>
                                    <td>
                                        @can('haveaccess','tarifas.edit')
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarTarifa{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        @endcan
                                        @can('haveaccess','tarifas.update1')
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarTarifa{{$item->id}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        @endcan
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
</div>

@include('pages.tarifas.modals.register_tarifa')
@include('pages.tarifas.modals.editar_tarifa')
@include('pages.tarifas.modals.eliminar_tarifa')
@include('pages.tarifas.modals.cargar_excel')
@endsection
@section('js')
@include('layouts.js')

@endsection