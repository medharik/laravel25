@extends('modeles')
@section('titre')
    nouveau client
@endsection
@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <form method="post" action="{{route('clients.store')}}">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="prenom" class="form-label">Prenom</label>
              <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
    </div>
</div>
@endsection
