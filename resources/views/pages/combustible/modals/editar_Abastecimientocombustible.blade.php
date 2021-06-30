@foreach ($combustibles as $item)
<div class="modal fade" id="editar_Abastecimientocombustible{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ABASTECIMIENTO DE COMBUSTIBLE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('abastecimientoCombustible.update',$item->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <label>Lugar</label>
                        <select class=" form-control form-control-sm" name="lugar">
                            @foreach ($rutas as $ruta)
                            <option value="{{$ruta->id}}" {{$ruta->id == $item->lugar ? 'selected' : ''}}>{{$ruta->punto_inicial}} - {{$ruta->punto_final}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Orden de Pago</label>
                        <select class=" form-control form-control-sm" name="orden_trabajo_id">
                            @foreach ($ordenes as $orden)
                            <option value="{{$orden->id}}" {{$orden->id == $item->orden_trabajo_id ? 'selected' : ''}}>{{str_pad($orden->id, 6, "0", STR_PAD_LEFT)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Precio</label>
                        <input type="text" class=" form-control form-control-sm" name="precio" value="{{$item->precio}}">
                    </div>
                    <div class="col-md-6">
                        <label>Galones</label>
                        <input type="text" class=" form-control form-control-sm" name="galones" value="{{$item->galones}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nº de Ticket</label>
                        <input type="text" class=" form-control form-control-sm" name="nro_ticket" value="{{$item->nro_ticket}}">
                    </div>
                    <div class="col-md-6">
                        <label>Ticket</label>
                        <input type="file" class="form-control form-control-sm" name="ticket">
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