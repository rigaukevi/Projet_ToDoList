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
		body {
			font-family: 'Raleway';
            background-color: #000000;
		}

		.fa-btn {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
		.container-fluid {
			background-color: #000000;

		}



		.couleurtexte {
			color: #FFFFFF;
			font-size: 50px;
		}
		.couleurtexterouge {
			color: #ff6666;
			font-size: 50px;
		}
		.testtexte {
			color: #ff6666;

		}
        
        .textedroite {
            margin-left: 80%;
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
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand " href="{{route('homeLink')}}">ToDo</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
                        <li><a href="{{route('loginLink')}}"><i class="fa fa-btn fa-sign-in"></i>Connexion</a></li>
						<li><a href="{{route('registerLink')}}"><i class="fa fa-btn fa-key"></i>Inscription</a></li>
						<li><a href="{{route('aboutLink')}}"><i class="fa fa-btn fa-question"></i>About</a></li>
					@else
						<li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
						<li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Déconnection</a></li>
                        <li><a href="{{route('aboutLink')}}"><i class="fa fa-btn fa-question"></i>About</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
@yield('content')
</body>
</html>
</div>



