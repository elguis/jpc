@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.navbar')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($nbr == 0)
                        <h4><a href="{{ route('members.create') }}">Enregistrez vous pour le camp des jeunes</a></h4>
                    @else
                        <img src="{{ Storage::url($member->image->path) }}" alt="" style="width:200px;height:100px">
                        <h4>Circonscription : {{ $circonscription->name }}</h4>
                        @if($member->sexe == 0)
                            <h4>Sexe : Feminin</h4>
                        @else
                            <h4>Sexe : Masculin</h4>
                        @endif
                        <h4>Fonction : {{ $member->fonction }}</h4>
                        <h4>Telephone : {{ $member->phone }}</h4>

                        <h4><a href="">Modifiez les informations</a></h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
