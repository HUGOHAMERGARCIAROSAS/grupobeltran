@foreach ($unidades as $key=>$item)
<div class="modal fade" id="editarUnidad{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR UNIDAD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('unidades.update',$item->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Placa:</label>
                        <input type="text" class="form-control" name="placa" value="{{$item->placa}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marca" value="{{$item->marca}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Carga:</label>
                        <input type="text" class="form-control" name="carga" value="{{$item->carga}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Escala:</label>
                        <input type="text" class="form-control" name="escala" value="{{$item->escala}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Fecha de Registro:</label>
                        <input type="date" class="form-control" name="created_at" value="{{ $item->created_at->format('Y-m-d') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Propio?:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="propio"  value="1" 
                            @if ($item->propio=='1')
                                checked
                            @endif>
                            <label class="form-check-label" >
                              PROPIO
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="propio" value="0" 
                            @if ($item->propio=='0')
                                checked
                            @endif>
                            <label class="form-check-label">
                              ALQUILADO
                            </label>
                          </div>
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
