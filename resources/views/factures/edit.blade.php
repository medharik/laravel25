@extends('modeles')
@section('titre')
    Edition de la facture numero : {{$facture->id}}
    <br>
    cette facture appartient au client : {{$facture->client->nom}} {{$facture->client->prenom}}
@endsection

@section('content')
<form method="post" action="{{ route('factures.update',$facture->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" value="{{$facture->date_facture}}" name="date_facture" class="form-control" id="date" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="client_id" class="form-label">Client</label>
        <select type="text" name="client_id" class="form-select" id="client_id" aria-describedby="emailHelp">
            @foreach ($clients as $c)
                <option @if ($c->id===$facture->client->id)
selected
                @endif  value="{{ $c->id }}">{{ $c->nom }} {{ $c->prenom }}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection
