<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Generate PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h1>Laravel y data en PDF</h1>
    <p>{{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>
  
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Apellido</th>
            <th>Avatar</th>
        </tr>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->id }}</td>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->apellido }}</td>
            <td>
                <!-- Usa una de estas dos opciones según tu necesidad -->
                <!-- Opción 1: Rutas locales absolutas -->
                <img src="{{ public_path('images/' . $trainer->avatar) }}" alt="Avatar" style="width:50px; height:50px;">

                <!-- Opción 2: Rutas públicas accesibles por URL -->
                <!-- <img src="{{ asset('images/' . $trainer->avatar) }}" alt="Avatar" style="width:50px; height:50px;"> -->
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

