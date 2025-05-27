@extends('modeles')
@section('titre')
    Details de la facture numero : {{$facture->id}}
@endsection
@section('content')
<ul>
    <li>Date de la facture : {{$facture->date_facture}}</li>
    <li>Client : {{$facture->client->nom}} {{$facture->client->prenom}}</li>
</ul>

<h2>ce client a d'autres factures :</h2>

@foreach ($facture_autres as $f)
<li>
    Numero : {{$f->id}}; creee le {{$f->date_facture}}
</li>
@endforeach
{{-- @foreach ($client->factures as $f)
@if ($f->id!=$facture->id)

<ul>
    <li>Facture  de numero : {{$f->id}}</li>
    <li>Facture de  Date  : {{$f->date_facture}}</li>
</ul>
@endif
<hr>
    @endforeach --}}

@endsection
