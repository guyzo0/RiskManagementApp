@extends('layouts.da.danal2')

@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Liste des ports disponibles</h2>
                    </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
                    <a href="{{ route('port.add')}}" class="btn btn-xs pull-right btn-success"> ajouter un port </a>

                        <thead>
                            <th>Index</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Carte</th>
                            
                            <th>Details</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </thead>

                        <tbody>
                            @foreach($ports as $port)
                                <tr>
                                    <th>{{ $port->id }}</th>
                                    <th>{{ $port->nom_port }}</th>
                                    <th>{{ $port->type_port }}</th>
                                    <th>{{ $port->carte }}</th>
                                   
                                    <th>
                                        <a href="{{ route('port.show', ['id'=>$port->id])}}" class="btn btn-sm btn-primary">Details</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('port.edit', ['id'=>$port->id])}}" class="btn btn-sm btn-warning">Editer</a>
                                    </th>
                                    <th>
                                        <a href="{{ route('port.delete', ['id'=>$port->id])}}" class="btn btn-sm btn-danger">Supprimer</a>
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
</section>
    @endsection