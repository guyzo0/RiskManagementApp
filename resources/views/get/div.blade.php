@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">              
                    @foreach($equ as $div)
                        <div class="alert alert-success" role="alert">
                            <a href = "{{ route('equ', [$div->id = $equ->division_id])}}" class = "form-control"> {{ $dep->nom_departement}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
