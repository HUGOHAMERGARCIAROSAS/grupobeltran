@foreach ($documentosP as $item)
<div class="modal fade" id="editarDocumentoP{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR DOCUMENTO PERSONAL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('documentosP.update',$item->id)}}" method="POST" enctype="multipart/form-data">
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
                        <label for="">CHOFERES:</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}"  {{$user->id == $item->user_id ? 'selected' : ''}}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo de Documento:</label>
                        <input type="text" class="form-control" name="tipo_documento" value="{{$item->tipo_documento}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Documento:</label>
                        <input type="text" class="form-control" name="documento" value="{{$item->documento}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Archivo:</label>
                        <h6>{{$item->archivos}}</h6>
                        <input type="file" class="form-control" name="archivos">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Fecha de Emisión:</label>
                        <input type="date" class="form-control" name="fecha_emision" value="{{ $item->fecha_emision->format('Y-m-d') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha de Vencimiento:</label>
                        <input type="date" class="form-control" name="fecha_vencimiento" value="{{$item->fecha_vencimiento->format('Y-m-d') }}">
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