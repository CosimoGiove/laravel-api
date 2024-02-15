@extends('admin.project.layouts.layouts')

@section('main')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
<a href="{{ route('admin.dashboard') }}">torna indietro</a>

<form action="{{route('admin.project.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <div class="text-center">
            titolo:
            {{ $project['titolo'] }}
            <div>
                effetua le modifiche
            </div>
        </div>

        <label for="titolo" class="form-label">
            titolo :
        </label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" id="titolo"
            value="{{ old('title', $project['title']) }}" name="title">

        <label for="immagine" class="form-label">
            immagine :
        </label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" id="titolo"
        value="{{ old('description', $project['description']) }}" name="description">
        <label for="prezzo" class="form-label">
           language:
        </label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" id="titolo"
        value="{{ old('language', $project['language']) }}" name="language">

        <label for="serie" class="form-label">
            frameworks:
        </label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" id="titolo"
            value="{{ old('frameworks', $project['frameworks']) }}" name="frameworks">
    </div>
    <button type="submit">effetua modifica</button>
</form>
</div>
    
@endsection