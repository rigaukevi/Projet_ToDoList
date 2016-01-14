<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Todo</title>



	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>


		.fa-btn {
			margin-right: 14px;
			font-size: 20px;
		}

		.fa-btn2 {

			font-size: 20px;
		}

		.table-text div {
			padding-top: 6px;
		}







	</style>

	<script>
		(function () {
			$('#task-name').focus();
		}());
	</script>
</head>

<body>
<div class="container ">
	<nav class="navbar navbar-default">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand " href="{{route('homeLink')}}">ToDo</a>
			</div>

			<div class="collapse navbar-collapse">


				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
                        <li><a href="{{route('loginLink')}}"><i class="fa fa-btn fa-sign-in"></i>Connexion</a></li>
						<li><a href="{{route('getRegister')}}"><i class="fa fa-btn fa-key"></i>Inscription</a></li>
					@else
						<li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
						<li><a href="{{route('getTask')}}"><i class="fa fa-btn fa-list"></i>Tâches</a></li>
						<li><a href="{{route('logout')}}"><i class="fa fa-btn fa-sign-out"></i>Déconnection</a></li>
                        <li><a href="{{route('aboutLink')}}"><i class="fa fa-btn fa-question"></i>A propos</a></li>
					@endif
				</ul>
			</div>
		</div>
		</div>
	</nav>
@yield('content')
</body>
</html>
</div>



