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
                <td>Cliente</td>
                <td>Tipo Servicio</td>
                <td>Tipo</td>
                <td>Ruta</td>
                <td>Precio</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarifas as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->cliente->razon_social}}</td>
                    <td>{{$item->tipo_servicio}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>{{$item->ruta}}</td>
                    <td>{{$item->precio}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>