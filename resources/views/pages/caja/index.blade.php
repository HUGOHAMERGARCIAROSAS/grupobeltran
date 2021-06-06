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
                        <h2>CAJA</h2>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Orden de Trabajo</th>
                                    <th>Cliente</th>
                                    <th>Moneda</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($orders as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->clientes->razon_social}}</td>
                                    <td></td>
                                    <td>{{$item->monto}}</td>
                                    <td>{{$item->estado}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#registerPago{{$item->id}}"> 
                                            <i class="fa fa-money"></i>
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
    @include('pages.caja.modals.register_pago')
</div>
@endsection
@section('js')
@include('layouts.js')    
@endsection