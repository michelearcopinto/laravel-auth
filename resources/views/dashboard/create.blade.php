@extends('layouts.app')

@section('content')
    <div class="mx-3 mt-3">

        <div class="container">
            <h1 class="mt-2 fw-bold">Create a new project:</h1>

            <form action="{{ route('dashboard.projects.store') }}" method="POST" class="mb-5">

                @csrf

                <div class="my-3">
                    <label for="title" class="form-label">Insert The Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        aria-describedby="title" name="title" value='{{ old('title') }}' maxlength="255">
                    @error('title')
                        <div class="alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Insert The Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" maxlength="500">{{ old('description') }}</textarea>
                    @error('title')
                        <div class="alert alert-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Insert The Image</label>
                    <input type="text" class="form-control" id="image" aria-describedby="image" name="image"
                        value='{{ old('image') }}' maxlength="1080">
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Insert The File</label>
                    <input type="text" class="form-control" id="file" aria-describedby="file" name="file"
                        value='{{ old('file') }}' maxlength="1080">
                </div>

                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
            <a href="{{ route('dashboard.projects.index') }}" class="btn btn-primary w-100">
                <i class="bi bi-pencil"></i> Torna a tutti i progetti
            </a>
        </div>
    </div>
@endsection
