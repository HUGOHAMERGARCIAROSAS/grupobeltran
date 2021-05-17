@foreach ($tarifas as $key=>$item)
<div class="modal fade" id="editarTarifa{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR TARIFA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('tarifas.update',$item->id)}}" method="POST">
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
                        <label for="">Clientes:</label>
                        <select class="form-control" name="cliente_id" >
                            <option value=''>Seleccionar un cliente</option>
                            @foreach ($clientes as $it)
                                <option value="{{$it->id}}" {{$it->id == $item->cliente_id ? 'selected' : ''}}>{{$it->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Tipo Servicio:</label>
                        <input type="text" class="form-control" name="tipo_servicio" value="{{$item->tipo_servicio}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Ruta:</label>
                        <input type="text" class="form-control" name="ruta" value="{{$item->ruta}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo:</label>
                        <select class="form-control" name="tipo" >
                            @if ($item->tipo=='Por Flete')
                            <option value='1'>Por Flete</option>
                            <option value='2'>Por Peso(KG)</option>
                            @endif
                            @if ($item->tipo=='Por Peso(kg)')
                            <option value='2'>Por Peso(KG)</option>
                            <option value='1'>Por Flete</option>
                            @endif
                            
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Precio:</label>
                        <input type="text" class="form-control" name="precio" value="{{$item->precio}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" name="usuario_updated" value="{{auth()->user()->email}}">
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
