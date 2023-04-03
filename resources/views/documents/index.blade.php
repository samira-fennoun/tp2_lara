@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des documents</h1>
        <a href="{{ route('documents.create') }}" class="btn btn-success">Ajouter un document</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre (FR)</th>
                    <th>Titre (EN)</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{ $document->id }}</td>
                        <td>{{ $document->title_fr }}</td>
                        <td>{{ $document->title_en }}</td>
                        <td>{{ $document->date }}</td>
                        <td>
                            <a href="{{ route('documents.show', $document->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-secondary">Modifier</a>
                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
{{$documents}}
    </div>
@endsection
