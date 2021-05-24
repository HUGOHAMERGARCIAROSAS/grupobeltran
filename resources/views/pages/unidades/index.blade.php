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
                        <h2>UNIDADES</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerUnidad">
                            <i class="fa fa-plus"></i> NUEVA UNIDAD
                        </button>
                    </div>
                </div>
                <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('unidades.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('unidades.export.excel')}}"  class="btn btn-warning">
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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">MARCA</th>
                                    <th class="text-center">PLACA</th>
                                    <th class="text-center">CARGA</th>
                                    <th class="text-center">ESCALA</th>
                                    <th class="text-center">FECHA REGISTRO</th>
                                    <th class="text-center">PROPIO/ALQUILADO</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($unidades as $key=>$item)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$item->marca}}</td>
                                    <td class="text-center">{{$item->placa}}</td> 
                                    <td class="text-center">{{$item->carga}}</td>
                                    <td class="text-center">{{$item->escala}}</td>
                                    <td class="text-center">{{$item->created_at->format('Y-m-d')}}</td>
                                    <td class="text-center">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" onclick="return false;"
                                                checked
                                            >
                                            @if ($item->propio=='1')
                                            <label class="form-check-label" for="flexSwitchCheckChecked">PROPIO</label>
                                            @endif
                                            @if ($item->propio=='0')
                                            <label class="form-check-label" for="flexSwitchCheckChecked">ALQUILADO</label>
                                            @endif
                                          </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarUnidad{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarUnidad{{$item->id}}">
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
</div>

@include('pages.unidades.modals.register_unidad')
@include('pages.unidades.modals.editar_unidad')
@include('pages.unidades.modals.eliminar_unidad')
@include('pages.unidades.modals.cargar_excel')
@endsection
@section('js')
@include('layouts.js')

@endsection