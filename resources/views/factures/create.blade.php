@extends('modeles')
@section('titre')
    Nouvelle facture
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form method="post" action="{{ route('factures.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date_facture" class="form-control" id="date" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="client_id" class="form-label">Client</label>
                    <select type="text" name="client_id" class="form-select" id="client_id" aria-describedby="emailHelp">
                        @foreach ($clients as $c)
                            <option value="{{ $c->id }}">{{ $c->nom }} {{ $c->prenom }}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
