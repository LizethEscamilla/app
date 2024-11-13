<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Generate PDF Example - ItSolutionStuff.com</title>
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
            <td class='text-right'>{{ $trainer->avatar }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

