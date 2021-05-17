@foreach ($clientes as $key=>$item)
<div class="modal fade" id="editarCliente{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR CLIENTE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('clientes.update',$item->id)}}" method="POST">
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
                        <label for="">Razón Social:</label>
                        <input type="text" class="form-control" name="razon_social" value="{{$item->razon_social}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Responsable:</label>
                        <input type="text" class="form-control" name="responsable" value="{{$item->responsable}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo de Documento:</label>
                        <select name="tipo_documento" id="" class="form-control"  value="{{$item->tipo_documento}}">
                            {{-- <option value="">Seleccione Opción</option> --}}
                            <option value="1" {{1==$item->tipo_documento ? 'selected' : ''}}>DNI</option>
                            <option value="2"  {{2==$item->tipo_documento ? 'selected' : ''}}>RUC</option>
                            <option value="3"  {{3==$item->tipo_documento ? 'selected' : ''}}>CARNET DE EXTRANJERÍA</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Número de Documento:</label>
                        <input type="text" class="form-control" name="documento" value="{{$item->documento}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" name="usuario_updated" value="{{auth()->user()->email}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Dirección de Carga:</label>
                        <input type="text" class="form-control" name="direccion_carga" value="{{$item->direccion_carga}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Dirección de Entrega:</label>
                        <input type="text" class="form-control" name="direccion_entrega" value="{{$item->direccion_entrega}}">
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
