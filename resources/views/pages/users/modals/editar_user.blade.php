
@foreach ($users as $key=>$user)
<div class="modal fade" id="editarUser{{$user->id}}" tabindex="-1" user="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" user="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('users.update',$user->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                 <div class="row">
                    <div class="col-md-12">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="name" autocomplete="nope" value="{{$user->name}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Roles:</label>
                       <select name="roles" id="roles" class="form-control">
                           @foreach ($roles as $role)
                           <option value="{{$role->id}}"
                            @isset($user->roles[0]->name)
                                @if ($role->name==$user->roles[0]->name)
                                selected
                                @endif
                            @endisset 
                            >{{$role->name}}</option>
                          
                           @endforeach
                       </select>
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
