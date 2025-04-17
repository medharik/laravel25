<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des articles</title>
</head>
<body>
    <h1>liste des articles :</h1>
   <table>
    <thead>
        <tr>
            <td>id</td>
            <td>libelle</td>
            <td>prix</td>
            <td>actions</td>
        </tr>
    </thead>
    <tbody>

@foreach ($articles as $a)
<tr>
    <td>{{$a->id}}</td>
    <td>{{$a->libelle}}</td>
    <td>{{$a->prix}}</td>
    <td></td>
</tr>

@endforeach

    </tbody>
   </table>

</body>
</html>
