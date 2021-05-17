
@foreach ($roles as $key=>$role)
@php
    $permission_role=[];

    foreach($role->permissions as $permission) {
        $permission_role[]=$permission->id;
    }
@endphp
<div class="modal fade" id="editarRole{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR ROL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('roles.update',$role->id)}}" method="POST">
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
                        <input type="text" class="form-control" name="name" autocomplete="nope" value="{{$role->name}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Slug:</label>
                        <input type="text" class="form-control" name="slug" value="{{$role->slug}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$role->descripcion}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Full Acceso:</label>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="yes" 
                            @if ( $role['full-access']=="yes") 
                              checked 
                            @elseif (old('full-access')=="yes") 
                              checked 
                            @endif>
                            <label class="form-check-label" for="fullaccess">Si</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="no"
                            @if ( $role['full-access']=="no") 
                              checked 
                            @elseif (old('full-access')=="no") 
                              checked 
                            @endif>
                            <label class="form-check-label" for="fullaccess" >No</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Permisos:</label>
                    </div>
                    <div class="col-md-12">
                        @foreach ($permissions as $permission)
                            <div class="form-group form-check" style="margin-bottom: 0">
                                <input type="checkbox" class="form-check-input" 
                                id="permission_{{$permission->id}}"
                                value="{{$permission->id}}"
                                name="permission[]"
                                @if( is_array(old('permission')) && in_array("$permission->id", old('permission'))    )
                                checked

                                @elseif( is_array($permission_role) && in_array("$permission->id", $permission_role)    )
                                checked

                                @endif>
                                <label class="form-check-label" for="permission_{{$permission->id}}">
                                    {{ $permission->id }}
                                    - 
                                    {{ $permission->name }} 
                                    <em>( {{ $permission->descripcion }} )</em></label>
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
@endforeach
