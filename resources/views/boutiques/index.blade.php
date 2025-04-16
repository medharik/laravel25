<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$titre}}</h2>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
       @foreach ($boutiques as $b)
       <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->nom}}</td>
        <td>{{$b->email}}</td>
        <td>Actions</td>

    </tr>
       @endforeach
    </tbody>
</table>
</body>
</html>
