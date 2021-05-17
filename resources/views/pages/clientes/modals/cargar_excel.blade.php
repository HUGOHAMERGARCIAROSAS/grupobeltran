

<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IMPORTAR EXCEL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('clientes.import.excel')}}" method="POST" enctype="multipart/form-data" id="logout-form1">
            @csrf
        
            @if(Session::has('message'))
                <p>{{Session::get('message')}}</p>
            @endif
            <div class="row">
                <div class="col-md-12">
                    
                <input type="file" name="file" class="form-control">
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </form>
    </div>
</div>