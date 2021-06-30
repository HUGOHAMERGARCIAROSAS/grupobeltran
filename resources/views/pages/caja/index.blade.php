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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Orden de Trabajo</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Moneda</th>
                                    <th class="text-center">Monto</th>
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
                                        {{-- <a href="{{route('cajas.edit',$item->id)}}" class="btn btn-sm btn-info"><i class="fa fa-money"></i></a> --}}
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
<script>
/* Sumar dos números. */
function sumar (valor) {
    var total = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
	
    total = document.getElementById('spTotal').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
</script> 
@endsection