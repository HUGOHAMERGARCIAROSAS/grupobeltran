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
                        <h2>DOCUMENTOS VEHÍCULO</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerDocumentoV">
                            <i class="fa fa-plus"></i> NUEVO DOCUMENTO
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Placa</th>
                                    <th>Tipo Documento</th>
                                    <th>Documento</th>
                                    <th>Archivo</th>
                                    <th>Fecha Emisión</th>
                                    <th>Fecha Vencimiento</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documentosV as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->vehiculo->placa}}</td>
                                    <td>{{$item->tipo_documento}}</td>
                                    <td>{{$item->documento}}</td>
                                    <td><a href="{{asset('/documentos/vehiculo/'.$item->archivos)}}"><i class="fa fa-download"></i> Descargar Documento</a></td>
                                    <td>{{date("d-m-Y", strtotime($item->fecha_emision))}}</td>
                                    <td>{{date("d-m-Y", strtotime($item->fecha_vencimiento))}}</td>
                                    @if ($item->estado==1)
                                       <td> <a class="btn btn-outline-success">Activo</a> </td> 
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarDocumentov{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarDocumentov{{$item->id}}">
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
    @include('pages.documentov.modals.register_documentov')
    @include('pages.documentov.modals.editar_documentov')
    @include('pages.documentov.modals.eliminar_documentov')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection