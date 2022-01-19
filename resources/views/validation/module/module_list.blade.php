@extends('layouts.da.danal2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Liste des Modules dont l'etat du risque est valide</h2>
                    </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
                        <thead>
                            <th>Index</th>
                            <th>Nom du Module</th>
                            <th>Date d'analyse</th>
                            <th>Afficher</th>
                        </thead>

                        <tbody>
                            @foreach($risqueModules as $risqueModule)
                                @if($risqueModule->validation == 1)
                                    <tr>
                                        <th>{{ $risqueModule->id }}</th>
                                        <th>{{ $risqueModule->titre }}</th>
                                        <th>{{ $risqueModule->created_at }}</th>
                                    
                                        <th>
                                            <a href="{{ route('etat_module', ['id'=>$risqueModule->id])}}" class="btn btn-sm btn-primary">Afficher</a>
                                        </th>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div><a href="" class="btn btn-sm btn-primary">Etat de tous les Modules</a></div>
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