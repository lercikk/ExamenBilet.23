<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editeaza</h2>
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titlu:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title}}">
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingrediente:</label>
                <textarea class="form-control" id="ingredients" name="ingredients">{{ $project->ingredients }}</textarea>

            </div>
            <div class="form-group">
                <label for="instructions">Instructie:</label>
                <textarea class="form-control" id="instructions" name="instructions">{{ $project->instructions}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salveaza</button>
        </form>
    </div>
@endsection
