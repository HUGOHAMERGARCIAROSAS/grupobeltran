<div class="modal fade" id="registerDocumentoV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR DOCUMENTO VEHÍCULO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('documentosV.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">VEHÍCULO:</label>
                        <select name="vehiculo_id" id="" class="form-control">
                            @foreach ($vehiculos as $vehiculo)
                                <option value="{{$vehiculo->id}}">{{$vehiculo->placa}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo de Documento:</label>
                        <input type="text" class="form-control" name="tipo_documento">
                    </div>
                    <div class="col-md-6">
                        <label for="">Documento:</label>
                        <input type="text" class="form-control" name="documento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Archivo:</label>
                        <input type="file" class="form-control" name="archivos">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Fecha de Emisión:</label>
                        <input type="date" class="form-control" name="fecha_emision">
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha de Vencimiento:</label>
                        <input type="date" class="form-control" name="fecha_vencimiento">
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