@extends('layouts.da.danal2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Liste des Division dont l'etat du risque est valide</h2>
                    </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
                        <thead>
                            <th>Index</th>
                            <th>Nom de la Division</th>
                            <th>Date d'analyse</th>
                            <th>Afficher</th>
                        </thead>

                        <tbody>
                            @foreach($risqueDivisions as $risqueDivision)
                                @if($risqueDivision->validation == 1)
                                    <tr>
                                        <th>{{ $risqueDivision->id }}</th>
                                        <th>{{ $risqueDivision->titre }}</th>
                                        <th>{{ $risqueDivision->created_at }}</th>
                                    
                                        <th>
                                            <a href="{{ route('etat_division', ['id'=>$risqueDivision->id])}}" class="btn btn-sm btn-primary">Afficher</a>
                                        </th>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div><a href="" class="btn btn-sm btn-primary">Etat de toutes les divisions</a></div>
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
</section>
    @endsection