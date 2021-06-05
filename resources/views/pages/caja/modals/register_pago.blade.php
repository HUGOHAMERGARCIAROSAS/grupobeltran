<div class="modal fade" id="registerPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PAGO DE ORDEN DE TRABAJO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-4">
                        <label>Cliente</label>
                        <input type="text" class=" form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>Monto</label>
                        <input type="text" class=" form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>Forma de pago</label>
                        <select class=" form-control form-control-sm">
                           <option value="1" selected>Efectivo</option> 
                           <option value="2">Cuenta</option> 
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Nº de Factura</label>
                        <input type="text" class=" form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>Factura</label>
                        <input type="file"  class=" form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>Monto a pagar</label>
                        <input type="text"  class=" form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div style="margin-left:550px">
                        <label>Saldo</label>
                        <input type="text" readonly="readonly" class=" form-control form-control-sm">
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