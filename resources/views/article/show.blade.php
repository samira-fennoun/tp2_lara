@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <div class="display-5 mt-2">
                    {{ config('app.name') }}
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="display-6 mt-2">
                    {{ $Article->title }}
                </div>
                <p>
                    {!! $Article->body !!}
                </p>
                <p>
                    <strong>Author : </strong>

                    @isset($Article->articleHasUser)
                        {{ $Article->articleHasUser->name }}
                    @endisset

                   
                </p>

                <a href="{{ route('article.index') }}" class="btn btn-sm btn-primary">Retourner</a>
            </div>
        </div>
        <div class="row mt-2">
            <hr>
            <div class="col-4">
                <a href="{{ route('article.pdf', $Article->id) }}" class="btn btn-warning btn-sm">PDF</a>
            </div>
            <div class="col-4">
                <a href="{{ route('article.edit', $Article->id) }}" class="btn btn-success btn-sm" target="_blank">Mettre à
                    jour</a>
            </div>
            <div class="col-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Effacer
                </button>

            </div>
        </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer l'article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Etes-vous sur d'effacer l'article : {{ $Article->title }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form action="{{ route('article.delete', $Article->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Effacer">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
