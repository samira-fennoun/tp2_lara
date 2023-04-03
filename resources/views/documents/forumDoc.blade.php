@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des documents</h1>
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
                @foreach ($documents as $document)
                    <tr>
                        <td>{{ $document->id }}</td>
                        <td>{{ $document->title_fr }}</td>
                        <td>{{ $document->title_en }}</td>
                        <td>{{ $document->date }}</td>
                        <td>
                            <a href="{{ asset('uploads/documents/' . $document->file) }}" download>Télécharger</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $documents }}
    </div>
@endsection
