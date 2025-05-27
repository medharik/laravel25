@extends('modeles')
@section('titre')
    Liste des clients
@endsection
@section('content')
<a href="{{route('clients.create')}}" class="btn btn-primary">Nouveau client</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <th scope="row">{{$c->id}}</th>
                    <td>{{$c->nom}}</td>
                    <td>{{$c->prenom}}</td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
