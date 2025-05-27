<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consultation de la matiere</title>
</head>
<body>
<h2>Consulatation de la matiere : {{$matiere->nom}}</h2>
<h3>le coeficient : {{$matiere->coef}}</h3>
<h3>le prof responsable : {{$matiere->professeur->nom}} {{$matiere->professeur->prenom}}</h3>

<hr>
<h2>les matieres enseignees par  le professeur : {{$matiere->professeur->nom}} {{$prof->prenom}}</h2>
@foreach ($prof->matieres as $m)
<li>{{$m->nom}} de coeficient : {{$m->coef}}</li>
@endforeach
</body>
</html>
