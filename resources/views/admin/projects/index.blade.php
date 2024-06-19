@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="py-4 fw-bold">Elenco progetti</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Link</th>
                    <th scope="col">Tecnologia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $index => $project)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td></td>
                        <td class="fw-bold">{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <img class="w-50 d-block mb-1" src="{{ $project->thumb }}" alt="{{ $project->thumb }}">
                            <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="{{ $project->link }}">
                                <small>{{ $project->link }}</small></a>
                        </td>
                        <td class="fw-bold">{{ $project->technologies }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
