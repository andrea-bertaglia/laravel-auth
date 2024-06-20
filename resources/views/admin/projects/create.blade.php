@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="py-3 fw-bold">Aggiungi un nuovo progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-6">

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description"
                            rows="5"></textarea>
                    </div>

                    <label for="technologies" class="form-label">Tecnologie</label>
                    <select class="form-select mb-4" aria-label="Technlogies">
                        <option>Seleziona un'opzione</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="VUE.js">VUE.js</option>
                        <option value="PHP">PHP</option>
                        <option value="Laravel">Laravel</option>
                    </select>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <fieldset disabled>
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" aria-describedby="slug"
                                name="slug">
                        </fieldset>

                        <div class="mt-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" aria-describedby="link"
                                name="link">
                        </div>

                        <div class="mt-3">
                            <label for="thumb" class="form-label">Anteprima</label>
                            <input type="text" class="form-control" id="thumb" aria-describedby="thumb"
                                name="thumb">
                        </div>

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-5">Salva</button>

        </form>
    </div>
@endsection
