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
                        <h2>ÓRDENES DE TRABAJO</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerOrdenTrabajo">
                            <i class="fa fa-plus"></i> NUEVA ORDEN
                        </button>
                    </div>
                </div>
                <div class="body">
                    <form action="{{route('reporte.operaciones.consultar')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-3">
                                <label>Fecha Inicio</label>
                                <input type="date" class="form-control" name='fecha_ini'>
                            </div> 
                            <div class="col-3">
                                <label>Fecha Fin</label>
                                <input type="date" class="form-control" name='fecha_fin'>
                            </div> 
                            <div class="col-3">
                                <button class="btn btn-warning" type="submit" style="margin-top:30px">
                                    <i class=" fa fa-search"></i>
                                </button>
                            </div>  
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-center">Orden de Trabajo</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Conductor</th>
                                    <th class="text-center">Vehículo</th>
                                    <th class="text-center">Ruta</th>
                                    <th class="text-center">Moneda</th>
                                    <th class="text-center">Importe</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($orders as $key=>$item)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{str_pad($item->id, 6, "0", STR_PAD_LEFT)}}</td>
                                    <td class="text-center">{{$item->clientes->razon_social}}</td>
                                    <td class="text-center">{{$item->usuarios->name}}</td> 
                                    <td class="text-center">{{$item->vehiculos->placa}}</td> 
                                    <td class="text-center">{{$item->rutas->punto_inicial}}</td>
                                    @if ($item->moneda==1)
                                        <td class="text-center">PEN</td>
                                    @endif
                                    @if ($item->moneda==0)
                                        <td class="text-center">USD</td>
                                    @endif
                                    <td class="text-center">{{$item->monto}}</td>
                                    @if ($item->estado==1)
                                    <td class="text-center">PENDIENTE</td>
                                    @endif
                                    @if ($item->estado==0)
                                    <td class="text-center">CANCELADO</td>
                                    @endif
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#registerKilometrosPesos{{$item->id}}"> <i class="fa fa-eye"></i> </button>
                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateOrdenTrabajo{{$item->id}}"> <i class=" fa fa-edit"></i> </button>
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
    @include('pages.ordenTrabajo.modals.register_ordenTrabajo')
    @include('pages.ordenTrabajo.modals.register_kilometros_pesos')
    @include('pages.ordenTrabajo.modals.update_ordenTrabajo')
</div>
@endsection
@section('js')
@include('layouts.js') 

<script>
     if(document.getElementById('isAgeSelected').checked) {
    $("#txtAge").show();
} else {
    $("#txtAge").hide();
}

$('#isAgeSelected').click(function() {
    $("#txtAge").toggle(this.checked);
});
</script>

@endsection