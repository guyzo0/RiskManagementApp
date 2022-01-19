@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Etat general sur tous les ports</span>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Gravite intrinseque</th>
                            <th>Gravite</th>
                            <th>Impact residul</th>
                            <th>Potentialite residuelle</th>
                        </thead>

                        <tbody>
                            @foreach($getGraviteGenerals as $getGraviteGeneral)
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    
                                        <th>
                                    
                                        </th>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong> Succes! </strong> {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>
</div>
    @endsection