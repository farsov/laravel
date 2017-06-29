<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')| Panel de Administrador</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		@include('admin.template.partials.nav')

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title', 'Default')</h3>
			</div>
			<div class="panel-body">
				<section>
					@include('flash::message')
					@include('admin.template.partials.errors')
					@yield('content')
				</section>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<footer class="footer">
					<p>&copy; Company 2017</p>
				</footer>
			</div>
		</div>


		

	</div>
	<div class="col-md-2"></div>
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.slim.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
