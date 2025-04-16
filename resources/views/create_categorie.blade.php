<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
</head>

<body>
    <h1>{{ $titre }}</h1>
    {{ session('notice') }}
    <div id="notice" class="d-block alert alert-info"></div>
    <form action="/enregister-categorie" method="post">
        @csrf
        Nom de la categorie : <input type="text" name="nom_categorie" id="">
        <button>Ajouter la categorie</button>
    </form>

    <script>
        function ajouter(e) {
            e.preventDefault();
            let form = document.querySelector('form');
            // let nom_categorie = document.querySelector('input[name="nom_categorie"]').value;
            let formData = new FormData(form);
            fetch("http://127.0.0.1:8000/enregister-categorie", {
                    method: 'POST',
                    body: formData
                }).then(resp => resp.json()).then(data => document.querySelector('#notice').innerHTML = "Categorie ajoutee avec succes " + data.nom_categorie).catch(er => console.error('erreur', er));
        }
        document.querySelector('button').addEventListener('click', ajouter);
    </script>
</body>

</html>
