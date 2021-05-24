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
                <td>Placa</td>
                <td>Marca</td>
                <td>Escala</td>
                <td>Carga</td>
                <td>Propiedad</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($unidades as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->placa}}</td>
                    <td>{{$item->marca}}</td>
                    <td>{{$item->escala}}</td>
                    <td>{{$item->carga}}</td>
                    @if ($item->propio=='1')
                        <td>PROPIO</td>
                    @endif
                    @if ($item->propio=='0')
                        <td>ALQUILADO</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>