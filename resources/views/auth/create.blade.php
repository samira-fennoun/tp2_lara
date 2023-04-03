@extends('layouts.app')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <h3>Register</h3>
                    </div>
                    <form method="post">
                        @csrf
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="form-group mb-3">
                                 <label for="name">name</label>
                                <input type="text" name="name" placeholder="Name" class="form-control"
                                    value="{{ old('name') }}" id="name">
                                @if ($errors->has('name'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="email">email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control"
                                    value="{{ old('email') }}" id="email">
                                @if ($errors->has('email'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                                @if ($errors->has('password'))
                                    <div class="text-danger mt-2" id="password">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm Password" class="form-control">
                                @if ($errors->has('password_confirmation'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="adresse">Adresse</label>
                                <input type="text" name="adresse" placeholder="adresse" class="form-control"
                                    value="{{ old('adresse') }}" id="adresse">
                                @if ($errors->has('adresse'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('adresse') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="phone">phone</label>
                                <input type="text" name="phone" placeholder="phone" class="form-control"
                                    value="{{ old('phone') }}" id="phone">
                                @if ($errors->has('phone'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('adresse') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="date_naissance">date de naissance</label>
                                <input type="date" name="date_naissance" placeholder="date_naissance"
                                    class="form-control" value="{{ old('phone') }}" id="date_naissance">
                                @if ($errors->has('date_naissance'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('date_naissance') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                 <label for="ville_id">Ville</label>
                                <select class="form-control" id="ville_id" name="ville_id" required>
                                    <option value="">-- Choisissez une ville --</option>
                                    @foreach ($villes as $ville)
                                        <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('ville_id'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('ville_id') }}
                                    </div>
                                @endif
                            </div>


                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
