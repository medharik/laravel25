<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvel ordinateur</title>
</head>
<body>
    <h1>Nouveau</h1>
    <form action="/pc/store" method="post">
       @csrf

        Entrer le nom de l'ordinateur : <input type="text" name="libelle" id="">
        Entrer le prix de l'ordinateur : <input type="text" name="prix" id="">
        <button>ajouter</button>
    </form>

</body>
</html>
