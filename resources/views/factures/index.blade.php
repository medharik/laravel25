@extends('modeles')
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
@endsection
@section('titre')
    Liste des factures
@endsection
@section('content')
<a href="{{route('factures.create')}}" class="btn btn-primary">Nouvelle facture</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Client</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($factures as $f)
                <tr>
                    <th scope="row">{{$f->id}}</th>
                    <td>{{$f->date_facture}}</td>
                    <td>{{$f->client->nom}} {{$f->client->prenom}}</td>
                    <td>
                       <div >
                        <a class="btn btn-sm btn-info" href="{{route('factures.show',$f->id)}}">C</a>
                        <a class="btn btn-sm btn-warning" href="{{route('factures.edit',$f->id)}}">E</a>
                        <form class="d-inline" action="{{route('factures.destroy',$f->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">S</button>
                        </form>
                        <a class="btn btn-sm btn-success" href="{{route('factures.show',$f->id)}}">P</a>
                       </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


        {{$factures->links()}}

@endsection
