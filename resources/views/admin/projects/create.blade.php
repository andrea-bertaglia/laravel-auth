@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="py-3 fw-bold">Aggiungi un nuovo progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-6">

                    <div class="mb-3">
                        <label for="title" class="form-label" id="title"">Titolo</label>
                        <input type="text"
                            class="form-control @error('title')
                            is-invalid
                        @enderror"
                            id="title" aria-describedby="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div id="title-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text"
                            class="form-control @error('description')
                            is-invalid
                        @enderror"
                            id="description" aria-describedby="description" name="description" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <div id="description-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <label for="technologies" class="form-label">Tecnologie</label>
                    <select
                        class="form-select @error('technologies')
                            is-invalid
                        @enderror"
                        aria-label="Technlogies" id="technologies" name="technologies">
                        <option>Seleziona un'opzione</option>
                        <option @selected(old('technologies') === 'HTML') value="HTML">HTML</option>
                        <option @selected(old('technologies') === 'CSS') value="CSS">CSS</option>
                        <option @selected(old('technologies') === 'JavaScript') value="JavaScript">JavaScript</option>
                        <option @selected(old('technologies') === 'VUE.js') value="VUE.js">VUE.js</option>
                        <option @selected(old('technologies') === 'PHP') value="PHP">PHP</option>
                        <option @selected(old('technologies') === 'Laravel') value="Laravel">Laravel</option>
                    </select>
                    @error('technologies')
                        <div id="technologies-error" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
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
                            <input type="text"
                                class="form-control @error('link')
                            is-invalid
                        @enderror"
                                id="link" aria-describedby="link" name="link" value="{{ old('link') }}">
                        </div>

                        <div class="mt-3">
                            <label for="thumb" class="form-label">Anteprima</label>
                            <input type="text"
                                class="form-control @error('thumb')
                            is-invalid
                        @enderror"
                                id="thumb" aria-describedby="thumb" name="thumb" value="{{ old('thumb') }}">
                        </div>

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-5 pe-3">Salva</button>

        </form>
    </div>
@endsection
