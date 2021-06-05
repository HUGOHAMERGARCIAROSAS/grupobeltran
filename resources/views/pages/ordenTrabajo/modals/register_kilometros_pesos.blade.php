<div class="modal fade" id="registerKilometrosPesos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ORDEN DE TRABAJO</h5>
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
                <label>Control de kilometros</label>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>KM Inicial</label>
                            <input type="date" class=" form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label>KM Final</label>
                            <input type="date" class=" form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <label>Recorrido Total:</label>
                           
                        </div>
                    </div>
                </div>
                <label>Pesos</label>
                <div >
                    <div class="row">
                        <div class="col-md-6">
                            <label>Peso Inicial</label>
                            <input type="date" class=" form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label>Peso Final</label>
                            <input type="date" class=" form-control form-control-sm">
                        </div>
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