
@extends('base')
@section('droite')
<div class="row g-2">
    @foreach ($documents as $d)
        <div class="col-md-3 text-center border border-danger p-2 my-2">
            <img class="img-fluid" src="{{ asset('storage/'.$d->image_path) }}" alt="">
            <h3>{{$d->title}}</h3>
            <a download target="_blank" href="{{ asset('storage/'.$d->file_path) }}">TELECHARGER CE DOCUMENT</a>
        </div>
    @endforeach
</div>
@endsection
@section('sidebar')
<h2>salut</h2>
@endsection
@section('copyrights')
    MNAOUAR
@endsection


