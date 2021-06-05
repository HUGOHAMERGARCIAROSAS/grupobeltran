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
                        <h2>ABASTECIMIENTO DE COMBUSTIBLE</h2>
                    </div>
                    <div style="float: right;padding-bottom:20px">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerAbastecimiento">
                            <i class="fa fa-plus"></i> COMBUSTIBLE
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Orden de trabajo</th>
                                    <th>Ruta</th>
                                    <th>Galones</th>
                                    <th>Total</th>
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
                                    <td>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.combustible.modals.register_Abastecimientocombustible')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection