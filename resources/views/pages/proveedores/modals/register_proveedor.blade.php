<div class="modal fade" id="registerProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PROVEEDOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('proveedores.store')}}" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <style>
                  .row{
                      padding-top: 10px;
                  }
              </style>
              <div class="row">
                  <div class="col-md-12">
                      <label for="">Razón Social:</label>
                      <input type="text" class="form-control" name="razon_social">
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <label for="">Responsable:</label>
                    <input type="text" class="form-control" name="responsable">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <label for="">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="col-md-6">
                  <label for="">Dirección:</label>
                  <input type="text" class="form-control" name="direccion">
              </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="">Tipo de Documento:</label>
                      <select name="tipo_documento" id="" class="form-control" >
                          <option value="">Seleccione Opción</option>
                          <option value="1">DNI</option>
                          <option value="2">RUC</option>
                          <option value="3">CARNET DE EXTRANJERÍA</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                      <label for="">Número de Documento:</label>
                      <input type="text" class="form-control" name="ruc">
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