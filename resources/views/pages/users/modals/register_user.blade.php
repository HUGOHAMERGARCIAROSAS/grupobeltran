<div class="modal fade" id="registerUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR USUARIO </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('users.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Nombres:</label>
                        <input type="text" class="form-control" name="name" autocomplete="nope" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Contraseña:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">DNI:</label>
                        <input type="text" class="form-control" name="dni">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Teléfono:</label>
                        <input type="text" class="form-control" name="telefono">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Fecha Ingreso:</label>
                        <input type="date" class="form-control" name="fecha_ingreso">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Rol:</label>
                        <select name="role_id" id="" class='form-control'>
                            @foreach ($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                            @endforeach
                        </select>
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