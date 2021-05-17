<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table border='1'>
        <thead >
            <tr >
                <td>#</td>
                <td>Razón Social</td>
                <td>Representante</td>
                <td>Tipo Documento</td>
                <td>Documento</td>
                <td>Dirección Carga</td>
                <td>Dirección Entrega</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->razon_social}}</td>
                    <td>{{$item->responsable}}</td>
                    @if ($item->tipo_documento==1)
                        <td>DNI</td>
                    @endif
                    @if ($item->tipo_documento==2)
                        <td>RUC</td>
                    @endif
                    @if ($item->tipo_documento==3)
                        <td>CE</td>
                    @endif
                    <td>{{$item->documento}}</td>
                    <td>{{$item->direccion_carga}}</td>
                    <td>{{$item->direccion_entrega}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>