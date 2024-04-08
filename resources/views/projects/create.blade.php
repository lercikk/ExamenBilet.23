
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Adauga</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titlu:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingrediente:</label>
                <textarea class="form-control" id="ingredients" name="ingredients"></textarea>
            </div>
            <div class="form-group">
                <label for="instructions">Instructie:</label>
                <textarea class="form-control" id="instructions" name="instructions"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salveaza</button>
        </form>
    </div>
@endsection
