@extends('layouts.app')
@section('content')
    {{-- @foreach ($newProject as $project) --}}
        <div class="container-project">
            @foreach ($newProject as $project)
            <ul>
                <li>
                    <div>
                        titolo progetto: {{ $project['title'] }}
                    </div>
                    <div>
                        linguaggio utilizzato: {{ $project['language'] }}
                    </div>
                    <div>
                        frameworks utilizzati: {{ $project['frameworks'] }}
                    </div>
                </li>
            </ul>
    @endforeach
    </div>
@endsection
