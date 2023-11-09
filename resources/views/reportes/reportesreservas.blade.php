<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            text-align: center;
            background-color: #219ebc;
            padding: 20px;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f1faee;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #219ebc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #a8dadc;
        }
    </style>
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
            @if(isset($reserva->id_horario))
                @php
                    $horario = App\Models\Horario::find($reserva->id_horario); 
                @endphp

            @if($horario)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $horario->hora }}</td> 
                    <td>{{ $reserva->cliente }}</td>
                    <td>{{ $reserva->obs }}</td>
                </tr>
            @endif
            @endif
        @endforeach
        </tbody>
    </table>
</body>
</html>
