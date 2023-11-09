<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Clientes</title>
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
    <h1>Reporte de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>fecha Nacimiento</th>
                <th>Celular</th>
                <th>email</th>
                <th>fecha de creacion</th>
                <th>fecha de modificacion</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->fecha_nac }}</td> 
                    <td>{{ $cliente->celular }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->created_at }}</td>
                    <td>{{ $cliente->updated_at }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
