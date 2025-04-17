<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvel article</title>
</head>
<body>
    <h1>Nouveau :</h1>
    <form action="/articles" method="post">
        @csrf
        <input type="text" name="libelle" placeholder="Entrer un libelle">
        <input type="text" name="prix" placeholder="Entrer un prix">
        <button>Ajouter</button>
    </form>

</body>
</html>
