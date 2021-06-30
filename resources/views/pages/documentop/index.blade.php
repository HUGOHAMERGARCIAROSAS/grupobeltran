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
                        <h2>DOCUMENTOS PERSONAL</h2>
                    </div>
                    <div style="float: right;padding-bottom:20px">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerDocumentoP">
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
                                    <th>Chofer</th>
                                    <th>Tipo Documento</th>
                                    <th>Documento</th>
                                    <th>Archivo</th>
                                    <th>Fecha Emisión</th>
                                    <th>Fecha Vencimiento</th>
                                    <th>Días</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documentosP as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->users->name}}</td>
                                    <td>{{$item->tipo_documento}}</td>
                                    <td>{{$item->documento}}</td>
                                    <td><a href="{{asset('/documentos/personal/'.$item->archivos)}}"><i class="fa fa-download"></i> Descargar Documento</a></td>
                                    <td>{{date("d-m-Y", strtotime($item->fecha_emision))}}</td>
                                    <td>{{date("d-m-Y", strtotime($item->fecha_vencimiento))}}</td>
                                    @if ($date>$item->fecha_vencimiento)
                                        <td class="text-center" > <a class="btn btn-outline-danger">{{$item->fecha_vencimiento->diffInDays($date)}} días de Vencido</a></td>
                                    @else
                                        <td class="text-center"><a class="btn btn-outline-success">{{$item->fecha_vencimiento->diffInDays($date)}} día para su vencimiento</a></td>
                                    @endif
                                    @if ($item->estado==1)
                                       <td> <a class="btn btn-outline-success">Activo</a> </td> 
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarDocumentoP{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarDocumentoP{{$item->id}}">
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
    
    @include('pages.documentoP.modals.register_documentoP')
    @include('pages.documentoP.modals.editar_documentoP')
    @include('pages.documentoP.modals.eliminar_documentoP')
    {{--@include('pages.clientes.modals.cargar_excel') --}}
</div>
@endsection

@section('js')
@include('layouts.js')
@if($count>0){
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire('Existen documentos vencidos, a revisar!')
    </script>
@endif

@endsection