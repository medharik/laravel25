<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>les posts de l'utilisateur : {{$utilisateur->name}}</h1>

    <ul>
        @foreach ($utilisateur->posts as $post)
        <li>{{$post->title}}</li>
        @endforeach
    </ul>

</body>
</html>
