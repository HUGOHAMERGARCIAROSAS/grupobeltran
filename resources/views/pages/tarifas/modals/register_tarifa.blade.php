<div class="modal fade" id="registerTarifa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR TARIFA </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('tarifas.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Clientes:</label>
                        <select class="form-control" name="cliente_id" >
                            <option value=''>Seleccionar un cliente</option>
                            @foreach ($clientes as $it)
                                <option value="{{$it->id}}">{{$it->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Tipo Servicio:</label>
                        <input type="text" class="form-control" name="tipo_servicio">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Ruta:</label>
                        <input type="text" class="form-control" name="ruta">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo:</label>
                        <select class="form-control" name="tipo" >
                            <option value=''>Seleccionar un cliente</option>
                            <option value='Por Flete'>Por Flete</option>
                            <option value='Por Peso(kg)'>Por Peso(KG)</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Precio:</label>
                        <input type="text" class="form-control" name="precio">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" name="usuario_insert" value="{{auth()->user()->email}}">
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

