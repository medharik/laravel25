<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
</head>
<body>

    <div>
        {{session('notice')}}
    </div>

    <h1>{{$message}}</h1>
    <form action="/enregister" method="post">
        @csrf
        <label for="libelle">libelle du produit</label>
        <input type="text" id="libelle" name="libelle" required>
        <label for="prix">prix du produit</label>
        <input type="text" id="prix" name="prix" required>
        <label for="qte">quantite du produit</label>
        <input type="text" id="qte" name="qte" required>
        <button>Ajouter le produit</button>
    </form>

</body>
</html>
