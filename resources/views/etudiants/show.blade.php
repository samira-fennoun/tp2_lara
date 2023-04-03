@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Détails de l'étudiant</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><strong>Nom :</strong></td>
                                <td>{{ $etudiant->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Adresse :</strong></td>
                                <td>{{ $etudiant->adresse }}</td>
                            </tr>
                            <tr>
                                <td><strong>Téléphone :</strong></td>
                                <td>{{ $etudiant->phone }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email :</strong></td>
                                <td>{{ $etudiant->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Date de naissance :</strong></td>
                                <td>{{ $etudiant->date_naissance }}</td>
                            </tr>
                            <tr>
                                <td><strong>Ville :</strong></td>
                                <td>{{ $etudiant->ville->nom }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-primary">Modifier</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
