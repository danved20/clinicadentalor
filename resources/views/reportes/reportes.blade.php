<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Reservas</title>
</head>
<body>
    <h1>Reporte de Reservas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cliente</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->hora }}</td>
                    <td>{{ $reserva->cliente }}</td>
                    <td>{{ $reserva->obs }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
