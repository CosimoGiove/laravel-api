@extends('admin.project.layouts.layouts')
@section('main')
    <main>
        <div class="container">
            <a href="{{ route('admin.dashboard') }}">
                torna ai proggetti
            </a>
            <h2>
                {{ $project['title'] }}
            </h2>
            <div>
                linguaggio utilizzato: {{ $project['language'] }}
            </div>
            <div>
                frameworks utilizzati:{{ $project['frameworks'] }}
            </div>
            <div>descrizione:{{ $project['description'] }}
            </div>
            <div>
                tipo:
                {{$project->type}}
            </div>
            <div>
                tech utilizzate:
                <ul>
                    @foreach ($tech as $technology)
                    <li> {{ $technology->tech}}</li>
                @endforeach
                </ul>
            </div>

        </div>
    </main>
@endsection
