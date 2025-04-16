<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/boutiques" method="post">
        @csrf
        <input type="text" placeholder="entrer nom" name="nom">

        <input type="text" placeholder="entrer email" name="email">
        @error('email')
{{$message}}
        @enderror
        <textarea type="text" placeholder="entrer adresse" name="adresse"></textarea>
        <input type="text" placeholder="entrer tel" name="tel">
        @error('tel')
            {{$message}}
        @enderror

        <button>valider</button>
    </form>
</body>
</html>
