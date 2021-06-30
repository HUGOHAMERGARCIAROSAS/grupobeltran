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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Placa</th>
                                    <th class="text-center">Tipo Documento</th>
                                    <th class="text-center">Documento</th>
                                    <th class="text-center">Archivo</th>
                                    <th class="text-center">Fecha Emisión</th>
                                    <th class="text-center">Fecha Vencimiento</th>
                                    <th class="text-center">Días</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documentosV as $key=>$item)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$item->vehiculo->placa}}</td>
                                    <td class="text-center">{{$item->tipo_documento}}</td>
                                    <td class="text-center">{{$item->documento}}</td>
                                    <td class="text-center"><a href="{{asset('/documentos/vehiculo/'.$item->archivos)}}"><i class="fa fa-download"></i> Descargar Documento</a></td>
                                    <td class="text-center">{{date("d-m-Y", strtotime($item->fecha_emision))}}</td>
                                    <td class="text-center">{{date("d-m-Y", strtotime($item->fecha_vencimiento))}}</td>
                                    @if ($date>$item->fecha_vencimiento)
                                        <td class="text-center" > <a class="btn btn-outline-danger">{{$item->fecha_vencimiento->diffInDays($date)}} días de Vencido</a></td>
                                    @else
                                        <td class="text-center"><a class="btn btn-outline-success">{{$item->fecha_vencimiento->diffInDays($date)}} día para su vencimiento</a></td>
                                    @endif
                                    @if ($item->estado==1)
                                       <td class="text-center"> <a class="btn btn-outline-success">Activo</a> </td> 
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
@if($count>0){
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire('Existen documentos vencidos, a revisar!')
    </script>
@endif

<script>
    $(document).ready(function(e){
       document.getElementById('documento').innerHTML='Nº de Poliza';
    });
    function TipodeDocumento(){
        let tipoDocumento= document.getElementById('fechaTramite').value ;
        if(tipoDocumento==1){
            document.getElementById('documento').innerHTML='Nº de Poliza';
        }else{
            document.getElementById('documento').innerHTML='Nº de Documento';
        }
    }
</script>
@endsection