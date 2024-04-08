
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Retete culinare</h2>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-2">Adauga</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Titlu</th>
                    <th>Descriere</th>
                    <th>Ingrediente</th>
                    <th>Instructie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->ingredients }}</td>
                    <td>{{ $project->instructions}}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-primary">Editeaza</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Stergere</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
