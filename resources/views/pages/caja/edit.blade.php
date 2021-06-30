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
                    <form action="{{route('cajas.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <style>
                                .row{
                                    padding-top: 10px;
                                }
                            </style>
                             <input type="hidden" name="user_insert" value="{{auth()->user()->email}}">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Cliente</label>
                                    <input type="text" class=" form-control form-control-sm" name="cliente_id" value="{{$item->clientes->razon_social}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Monto</label>
                                    <input type="text"  class=" form-control form-control-sm Can_Produc" name="monto" value="{{$item->monto}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Forma de pago</label>
                                    <select class=" form-control form-control-sm" name="forma_pago">
                                       <option value="1" selected>Efectivo</option> 
                                       <option value="2">Cuenta</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nº de Factura</label>
                                    <input type="text" class=" form-control form-control-sm" name="nro_factura">
                                </div>
                                <div class="col-md-4">
                                    <label>Factura</label>
                                    <input type="file"  class=" form-control form-control-sm" name="factura">
                                </div>
                                <div class="col-md-4">
                                    <label>Monto a pagar</label>
                                    <input type="text"  class="monto form-control form-control-sm Can_Produc" name="monto_pagar">
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin-left:550px">
                                    <label>Saldo:  </label>
                                    <input type="text" readonly="readonly"  id="spTotal" class=" form-control form-control-sm" name="monto" value="{{$item->monto}}" name="saldo" id="Inventario">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <a href="{{route('cajas.index')}}" class="btn btn-secondary" >Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('layouts.js')   
<script>
$('.Can_Produc').keyup(function() {

  var limite = parseInt($("#Inventario").data("limit"));
  var nuevo_valor =  $(this).val();
  var importe_total = 0;
  
  $(".Can_Produc").each( 
      function(index, value) {
          if ( $.isNumeric($(this).val()) ){
            importe_total += parseInt($(this).val());
         }
      }
    );
    
    $("#Inventario").val(limite - importe_total);
});
</script> 
@endsection