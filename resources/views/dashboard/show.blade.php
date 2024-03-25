@extends('layouts.app')

@section('content')
    <div class="mx-3 mt-3">

        <div class="container">
            <h1 class="mt-2 fw-bold">{{ $project->title }}</h1>

            <p>{{ $project->description }}</p>

            <figure>
                <img src="{{ $project->image }}" alt="">
            </figure>

            <span>{{ $project->file }}</span>

            <a href="{{ route('dashboard.projects.index') }}" class="btn btn-primary w-100">
                <i class="bi bi-pencil"></i> Torna a tutti i progetti
            </a>
        </div>
    </div>
@endsection
