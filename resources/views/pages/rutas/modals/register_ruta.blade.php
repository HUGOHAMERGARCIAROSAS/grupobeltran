<div class="modal fade" id="registerRuta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR RUTA </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('rutas.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Punto Inicial:</label>
                        <input type="text" class="form-control" name="punto_inicial">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Punto Final:</label>
                        <input type="text" class="form-control" name="punto_final">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Distancia:</label>
                        <input type="text" class="form-control" name="distancia">
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