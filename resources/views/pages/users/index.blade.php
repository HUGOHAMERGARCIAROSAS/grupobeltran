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
                        <h2>RUTAS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerUsuario">
                            <i class="fa fa-plus"></i> NUEVO USUARIO
                        </button>
                    </div>
                </div>
                <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('rutas.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('rutas.export.excel')}}"  class="btn btn-warning">
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
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Role(s)</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        @isset ($item->roles[0]->name)
                                            {{$item->roles[0]->name}}
                                        @endisset
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarUser{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarUser{{$item->id}}">
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
@include('pages.users.modals.register_user')
@include('pages.users.modals.editar_user') 
@include('pages.users.modals.eliminar_user')
{{--@include('pages.rutas.modals.cargar_excel') --}}
@endsection
@section('js')
@include('layouts.js')

@endsection