@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">                  
                    @foreach($directions as $direction)
                        <div class="card-header">
                            <a href = "{{ route('dep',  ['id'=>$departement->id])}}" class = "form-control"> {{ $direction->nom_direction}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
