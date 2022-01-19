@extends('layouts.app')

@section('content')
<div class="container">
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
                        
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-4 mt-4">
        <div class="col-md-8">
            <div class="card">
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <a href="" class="btn btn-success btn-lg">hhh</a>
                    </div>
                    
                    <div class = "form-group">
                        <label for = "niveau_gravite">Niveau gravite general </label>
                        @if($general_port)
                        <input type = "number" name = "general_port"  disabled value="{{ $general_port}}" class = "form-control">
                        @endif
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
        <div class="pt-4 mt-4">
            
        </div>
</div>
@endsection
