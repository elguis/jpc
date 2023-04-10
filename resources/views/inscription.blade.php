@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription pour le camp des jeunes') }}</div>

                <div class="card-body">
                    <?php $id = Auth::user()->id ?>
                    <form method="POST" action="{{ route('members.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="circonscription" class="col-md-4 col-form-label text-md-end">{{ __('Circonscription') }}</label>

                            <div class="col-md-6">
                                <select name="circonscription" id="circonscription" class="form-control">
                                    @foreach($circonscriptions as $circonscription)
                                        <option value="{{ $circonscription->id }}">{{ $circonscription->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sexe" class="col-md-4 col-form-label text-md-end">{{ __('Sexe') }}</label>

                            <div class="col-md-6">
                                <select name="sexe" id="sexe" class="form-control">
                                    <option value="0">Feminin</option>
                                    <option value="1">Masculin</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fonction" class="col-md-4 col-form-label text-md-end">{{ __('Fonction') }}</label>

                            <div class="col-md-6">
                                <select name="fonction" id="fonction" class="form-control">
                                    @foreach($fonctions as $fonction)
                                        <option value="{{ $fonction->name }}">{{ $fonction->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="avatar" id="avatar" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection