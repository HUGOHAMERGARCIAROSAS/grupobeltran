<div class="modal fade" id="registerRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR ROL </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('roles.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="name" autocomplete="nope" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Slug:</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Full Acceso:</label>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="yes">
                            <label class="form-check-label" for="fullaccess">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="yes" checked>
                            <label class="form-check-label" for="fullaccess" >No</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Permisos:</label>
                    </div>
                    <div class="col-md-12">
                        @foreach ($permissions as $item)
                            <div class="form-group form-check" style="margin-bottom: 0">
                                <input type="checkbox" class="form-check-input" id="permission_{{$item->id}}" value="{{$item->id}}" name="permission[]">
                                <label class="form-check-label" for="permission_{{$item->id}}">{{$item->id}} - {{$item->name}} <em>({{$item->descripcion}})</em></label>
                            </div>
                        @endforeach
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