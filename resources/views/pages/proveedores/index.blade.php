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
                        <h2>PROVEEDORES</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerProveedor">
                            <i class="fa fa-plus"></i> NUEVO PROVEEDOR
                        </button>
                    </div>
                </div>
                <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('proveedores.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('proveedores.export.excel')}}"  class="btn btn-warning">
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
                                    <th>Responsable</th>
                                    <th>Teléfono</th>
                                    <th>Tipo Documento</th>
                                    <th>Dirección</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->razon_social}}</td>
                                    <td>{{$item->responsable}}</td>
                                    <td>{{$item->telefono}}</td>
                                    @if ($item->tipo_documento=='1') 
                                    <td>DNI: {{$item->ruc}}</td>
                                    @endif
                                    @if ($item->tipo_documento=='2') 
                                    <td>RUC: {{$item->ruc}}</td>
                                    @endif
                                    @if ($item->tipo_documento=='3') 
                                    <td>CE: {{$item->ruc}}</td>
                                    @endif
                                    <td>{{$item->direccion}}</td>
                                    {{-- <td>{{$item->direccion_entrega}}</td> --}}
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarProveedor{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarProveedor{{$item->id}}">
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
    @include('pages.proveedores.modals.register_proveedor')
    @include('pages.proveedores.modals.editar_proveedor')
    @include('pages.proveedores.modals.eliminar_proveedor')
    @include('pages.proveedores.modals.cargar_excel')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection