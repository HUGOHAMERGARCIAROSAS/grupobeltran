@foreach ($orders as $item)
<div class="modal fade" id="updateOrdenTrabajo{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR ORDEN DE TRABAJO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <form action="{{route('ordenTrabajo.updateEstado',$item->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <input type="hidden" name="usuario_deleted" value="{{auth()->user()->email}}">
                        {{-- <div class="modal-footer"> --}}
                            <button type="submit" class="btn btn-warning btn-sm" style="margin-left: 700px">
                                FINALIZAR
                            </button>
                        {{-- </div> --}}
                    </form>
                </div>
                <form action="{{route('viajes.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                <div class="row">
                    <div class="col-md-4">
                        <label>Fecha Inicio</label>
                        <input type="date" class=" form-control form-control-sm" name="fecha_inicio" value="{{$item->fecha_inicio->format('Y-m-d') }}">
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <label>Fecha Fin</label>
                        <input type="date" class=" form-control form-control-sm" name="fecha_fin" value="{{$item->fecha_fin->format('Y-m-d') }}">
                    </div>
                </div>
                <input type="hidden" name="usuario_updated" value="{{auth()->user()->email}}">
                <div class="row">
                    <div class="col-md-4">
                        <label>Empresa</label>
                        <select name="empresa_id" id="sede" class=" form-control">
                            <option value="TRBT" selected>Tranporte Beltran</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Cliente</label>
                        <select name="cliente_id" id="" class="form-control">
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}" {{$cliente->id == $item->cliente_id ? 'selected' : ''}}>{{$cliente->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Conductor</label>
                        <select name="conductor_id" id="" class="form-control">
                            @foreach ($conductores as $conductor)
                                <option value="{{$conductor->id}}" {{$conductor->id == $item->conductor_id ? 'selected' : ''}}>{{$conductor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4">
                        <label>Ruta</label>
                        <select name="ruta_id" class="form-control">
                            @foreach ($rutas as $ruta)
                                <option value="{{$ruta->id}}" {{$ruta->id == $item->ruta_id ? 'selected' : ''}}>{{$ruta->punto_inicial.'_'.$ruta->punto_final}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label>Vehículo</label>
                        <select name="vehiculo_id" class="form-control">
                            @foreach($unidades as $unidad)
                            <option value="{{$unidad->id}}" {{$unidad->id == $item->vehiculo_id ? 'selected' : ''}}>{{$unidad->placa}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label>Producto</label>
                        <input type="text" class=" form-control form-control-sm"  name="producto" value="{{$item->producto}}">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4">
                        <label>Peso inicial</label>
                        <input type="text" class=" form-control form-control-sm"  name="peso_inicial" value="{{$item->peso_inicial}}">
                    </div>
                    <div class=" col-md-4">
                        <label>Monto</label>
                        <input type="text" class=" form-control form-control-sm" name="monto" value="{{$item->monto}}">
                    </div>
                    <div class=" col-md-4">
                       <label>Total Soles</label> 
                       <input type="text" class=" form-control form-control-sm" name="total_soles" value="{{$item->total_soles}}">
                    </div>
                </div>
                <div class="row">
                    <div style="margin: auto">
                        <input type="checkbox"  id="isAgeSelected">
                        <label>Terceros</label>
                    </div>
                </div>
                <div class="row" id="txtAge" >
                    <div class=" col-md-4">
                        <label >Empresa Tercera</label>
                        <select name="empresa_tercera_id" class="form-control">
                            <option value="1">Empresa 1</option>
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label >Precio Tercero</label>
                        <input type="text" class=" form-control form-control-sm" name="precio_tercero" value="{{$item->precio_tercero}}">
                    </div>
                    <div class=" col-md-4">
                        <label >Monto Tercero</label>
                        <input type="text"  class=" form-control form-control-sm" name="monto_tercero" value="{{$item->monto_tercero}}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach