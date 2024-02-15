@extends('admin.project.layouts.layouts')
@section('main')
    <main>
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
            <form action="{{ route('admin.project.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                        <h1>Crea nuovo progetto</h1>
                        <div>
                            effetua le modifiche
                        </div>
                    </div>
                    <label for="titolo" class="form-label">
                        titolo :
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('title') }}" name="title">
                    <label for="titolo" class="form-label">
                        descrizione:
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('description') }}" name="description">
                    <label for="titolo" class="form-label">
                        language :
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('frameworks') }}" name="frameworks">
                    <label for="titolo" class="form-label">
                        frameworks:
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('language') }}" name="language">
                    <div>
                        tecnologie utilizzate:
                    </div>
                    @foreach ($tech as $technology)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="tech[]"
                                id="tech-{{ $technology->id }}"
                                {{ in_array($technology->id, old('tech', [])) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="tech-{{ $technology->id }}">{{ $technology->tech}}</label>
                        </div>
                    @endforeach
                    <div>
                        <button type="submit">invia</button>
                    </div>
            </form>
        </div>

    </main>

@endsection
