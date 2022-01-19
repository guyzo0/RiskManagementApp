@extends('layouts.da.dexpert')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Expert Dashboard') }}</div>

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
</form>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <form>
                <div class="row mb-3">
                    <div class="col">
                        <a href="{{ route('list_validation')}}" class="btn btn-warning btn-lg">Validation</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('list_etat')}}" class="btn btn-success btn-lg">Connaitre l'etat du risque</a>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <a href="{{ route('list_datab')}}" class="btn btn-danger btn-lg">Databse management</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('list_detail')}}" class="btn btn-primary btn-lg">Detail</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
