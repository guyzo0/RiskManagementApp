<!DOCTYPE html>
<html lang="en">
<head>
	<title>Code</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('decideur/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('decideur/css/main.css')}}">
<!--===============================================================================================-->

		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <!-- Right Side Of Navbar -->
            <ul class=" ml-auto">
					<li class="nav-item d-none d-sm-inline-block">
                        <a id="decideurDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('decideur')->user()->name }} (MANAGER) <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="expertDropdown">
                            <a href="{{route('decideur.home')}}" class="dropdown-item">Dashboard Decideur</a>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
				</ul>
			</nav>		
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">ANALYST</th>
									<th class="cell100 column2">EXPERT</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">GDVFRPOK</td>
									<td class="cell100 column2">NTRFDR</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">XXHGREKO</td>
									<td class="cell100 column2">GRDAHY</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">WMGDAUKP</td>
									<td class="cell100 column2">HGCZTU</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">STREHNBL</td>
									<td class="cell100 column2">TFCVGY</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">SXPLOIPD</td>
									<td class="cell100 column2">PLKJHU</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">WWXXJASI</td>
									<td class="cell100 column2">TDFGE</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">DZZHREUO</td>
									<td class="cell100 column2">SMSYTD</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">OUYTRPOJ</td>
									<td class="cell100 column2">PLATYH</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">GFDRYUKK</td>
									<td class="cell100 column2">KKEDFG</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">FDHYTGHH</td>
									<td class="cell100 column2">CZXNFL</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">ARVZFVBN</td>
									<td class="cell100 column2">IIJAUK</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">OJHGFTYY</td>
									<td class="cell100 column2">TYFDEE</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="{{ asset('decideur/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('decideur/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('decideur/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('decideur/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('decideur/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('decideur/js/main.js')}}"></script>

</body>
</html>