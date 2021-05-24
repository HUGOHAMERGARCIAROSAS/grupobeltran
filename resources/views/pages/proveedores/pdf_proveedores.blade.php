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
                <td>Teléfono</td>
                <td>Dirección</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $key=>$item)
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
                    <td>{{$item->ruc}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->direccion}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>