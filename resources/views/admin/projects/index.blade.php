@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center pb-3">
            <h1 class="py-4 fw-bold">Elenco progetti</h1>
            <div>
                <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Aggiungi nuovo</a>

            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Link</th>
                    <th scope="col">Tecnologia</th>
                    <th scope="col">Opzioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td class="fw-bold">{{ $project->title }}</td>
                        <td>
                            <a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="{{ $project->link }}">
                                <small>{{ $project->link }}</small></a>
                        </td>
                        <td class="fw-bold">{{ $project->technologies }}</td>
                        <td class="d-flex align-items-center justify-content-center gap-4 py-3">
                            <div>
                                <a class="btn btn-success"
                                    href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                            </div>
                            <div>
                                <a class="btn btn-warning text-white"
                                    href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"><i
                                        class="fa-solid fa-pencil"></i></a>
                            </div>
                            <div>
                                <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
