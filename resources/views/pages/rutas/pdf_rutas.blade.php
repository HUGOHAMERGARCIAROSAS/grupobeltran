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
                <td>Punto Inicial</td>
                <td>Punto Final</td>
                <td>Distancia</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($rutas as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->punto_inicial}}</td>
                    <td>{{$item->punto_final}}</td>
                    <td>{{$item->distancia}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>