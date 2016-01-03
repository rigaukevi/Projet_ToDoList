
@extends('app')

@section('content')

    <div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">



                @if (Auth::guest())
                    <div class="panel-body">
                        Merci de vous connecter pour accéder aux taches
                    </div>
                    </br>
                    <div class="text-center">
                        <button type="button" class="btn btn-default" >
                            <a href="{{route('loginLink')}}">
                                <i class="fa fa-btn fa-sign-in"></i>Connexion</a>
                        </button>
                    </div>
                    </br>
                    <div class="text-center">
                        <button type="button" class="btn btn-default" >
                            <a href="{{route('getRegister')}}">
                                <i class="fa fa-btn fa-key"></i>Inscription</a>
                        </button>
                    </div>
                    </br>
                    </br>
                @else
                    <div class="panel-body">
                        Vous êtes connecté !!
                        </br>
                        </br>
                        <div class="text-center">
                        <button type="button" class="btn btn-default" >
                        <a href="{{route('getTask')}}">
                            <i class="fa fa-btn fa-list"></i>Tâches</a>
                        </button>
                         </div>
                    </div>

                @endif







			</div>
		</div>
	</div>
@endsection