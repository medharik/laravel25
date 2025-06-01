@extends('modeles')
@section('titre')
    Creation de la facture numero {{ $facture->id }}
    du client {{ $facture->client->nom }} {{ $facture->client->prenom }}
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('factures.store_ligne_facture') }}" method="post">
            @csrf
            <input type="hidden" name="facture_id" value="{{ $facture->id }}">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" name="produit_id" id="" required>
                        <option value="" selected>...</option>
                        @foreach ($produits as $p)
                            <option value="{{ $p->id }}"> {{ $p->libelle }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="number" name="quantite" value="1" placeholder="Quantite " class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-sm btn-primary" type="submit">Ajouter le produit </button>
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-striped container">
            <thead>
                <tr>
                    <th>#</th>
                    <th>libelle</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>total ligne</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                ?>
                @foreach ($facture->produits as $p)
                    <?php
                    $total_ligne = $p->prix * $p->pivot->quantite;
                    $total += $total_ligne;
                    ?>
                    {{-- {{dd($p->pivot)}} --}}

                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->libelle }}</td>
                        <td>{{ $p->prix }}</td>
                        <td>{{ $p->pivot->quantite }}</td>
                        <td>{{ $total_ligne }}</td>
                        <td>Actions</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td>TTC:</td>
                    <td>{{$total}}DHS</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
