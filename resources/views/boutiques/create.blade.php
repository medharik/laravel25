<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- meta pour csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <li>
                {{ $e }}
            </li>
        @endforeach
    @endif
    <div id="rep"></div>
    <form id="form" action="/boutiques" method="post">
        @csrf
        <input type="text" placeholder="entrer nom" name="nom" value={{old('nom')}}>

        <input type="text" placeholder="entrer email" name="email">
        @error('email')
            {{ $message }}
        @enderror
        <textarea type="text" placeholder="entrer adresse" name="adresse"></textarea>
        <input type="text" placeholder="entrer tel" name="tel">
        @error('tel')
            {{ $message }}
        @enderror

        <button>valider</button>
    </form>
    <script>
        document.querySelector('#form').addEventListener('submit', function (e) {
            e.preventDefault();
            const form = document.querySelector('#form');
            const data = new FormData(form);
console.log('form data',data)
            fetch('/api/boutiques', {
                method: 'POST',
                body: data,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(d => {
                if (d.nom) {
                    document.getElementById('rep').innerHTML = "Boutique " + d.nom + " ajoutée avec succès.";
                    form.reset();
                } else {
                    document.getElementById('rep').innerHTML = "Une erreur s’est produite.";
                }
                console.log('data', d);
            })
            .catch(error => {
                document.getElementById('rep').innerHTML = "Erreur lors de la requête.";
                console.log('erreur', error);
            });
        });
    </script>

</body>

</html>
