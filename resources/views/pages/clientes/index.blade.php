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
                        <h2>CLIENTES</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerCliente">
                            <i class="fa fa-plus"></i> NUEVO CLIENTE
                        </button>
                    </div>
                </div>
                <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('clientes.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('clientes.export.excel')}}"  class="btn btn-warning">
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
                                    <th>Razón Social</th>
                                    <th>Tipo Documento</th>
                                    <th>Dirección Carga</th>
                                    <th>Dirección Entrega</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->razon_social}}</td>
                                    @if ($item->tipo_documento=='1') 
                                    <td>DNI: {{$item->documento}}</td>
                                    @endif
                                    @if ($item->tipo_documento=='2') 
                                    <td>RUC: {{$item->documento}}</td>
                                    @endif
                                    @if ($item->tipo_documento=='3') 
                                    <td>CE: {{$item->documento}}</td>
                                    @endif
                                    <td>{{$item->direccion_carga}}</td>
                                    <td>{{$item->direccion_entrega}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarCliente{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarCliente{{$item->id}}">
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
    @include('pages.clientes.modals.register_cliente')
    @include('pages.clientes.modals.editar_cliente')
    @include('pages.clientes.modals.eliminar_cliente')
    @include('pages.clientes.modals.cargar_excel')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection