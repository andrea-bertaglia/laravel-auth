@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="py-3">{{ $project->title }}</h1>

        <div class="row">
            <div class="col-4">
                <div>
                    <img class="w-100" src="{{ asset('storage/' . $project->thumb) }}" alt="">

                </div>
            </div>
            <div class="col-8">
                <p>{{ $project->description }}</p>
                {{-- <dd>Link</dd> --}}
                {{-- <dt class="pb-4">{{ $project->link }}</dt> --}}
                {{-- <dd>Tecnologia</dd>
                <dt class="pb-4">{{ $project->technologies }}</dt> --}}
                <dd>Slug</dd>
                <dt>{{ $project->slug }}</dt>
            </div>
        </div>
    </div>
@endsection
