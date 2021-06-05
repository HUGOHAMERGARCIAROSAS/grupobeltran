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
                        <h2>ÒRDENES DE TRABAJO</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerOrdenTrabajo">
                            <i class="fa fa-plus"></i> NUEVA ORDEN
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-3">
                            <label>Fecha Inicio</label>
                            <input type="date" class="form-control">
                        </div> 
                        <div class="col-3">
                            <label>Fecha Fin</label>
                            <input type="date" class="form-control">
                        </div> 
                        <div class="col-3">
                            <button class="btn btn-warning"  style="margin-top:30px">
                                <i class=" fa fa-search"></i>
                            </button>
                        </div>  
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Conductor</th>
                                    <th>Vehículo</th>
                                    <th>Ruta</th>
                                    <th>Moneda</th>
                                    <th>Importe</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#registerKilometrosPesos"> <i class="fa fa-eye"></i> </button>
                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateOrdenTrabajo"> <i class=" fa fa-edit"></i> </button>
                                    </td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.ordenTrabajo.modals.register_ordenTrabajo')
    @include('pages.ordenTrabajo.modals.register_kilometros_pesos')
    @include('pages.ordenTrabajo.modals.update_ordenTrabajo')
</div>
@endsection
@section('js')
@include('layouts.js')    
@endsection