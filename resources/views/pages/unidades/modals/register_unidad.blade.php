<div class="modal fade" id="registerUnidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR UNIDAD </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('unidades.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Placa:</label>
                        <input type="text" class="form-control" name="placa">
                    </div>
                    <div class="col-md-6">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marca">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Carga:</label>
                        <input type="text" class="form-control" name="carga">
                    </div>
                    <div class="col-md-6">
                        <label for="">Escala:</label>
                        <input type="text" class="form-control" name="escala">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Fecha de Registro:</label>
                        <input type="date" class="form-control" name="created_at">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Propio?:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propio" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              PROPIO
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="propio" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              ALQUILADO
                            </label>
                          </div>
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

