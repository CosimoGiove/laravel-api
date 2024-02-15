@extends('admin.project.layouts.layouts')

@section('main')
    <h2 class="text-center">modifiche effetuate</h2>
    <div class="container">
        <a href="{{ route('admin.dashboard') }}">
            torna indietro
        </a>
        <ul>
            <li>
                titolo : {{ $project['title'] }}
            </li>
            <li>
                linguaggio utilizzato : {{ $project['language'] }}
            </li>
            <li>
                frameworks utilizzati : {{ $project['frameworks'] }}
            </li>
            <li>
                descrizione : {{ $project['description'] }}
            </li>
        </ul>
    </div>
@endsection
