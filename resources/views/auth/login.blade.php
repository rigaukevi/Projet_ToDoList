@extends('app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">

				</br></br>


				<div class="panel-body">

					@include('common.errors')

							<!-- Login -->
					<form method="POST" action="{{ url('/auth/login') }}" class="form-horizontal">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


								<!-- E-Mail Address -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">E-Mail</label>

							<div class="col-sm-6">
								<input type="email" name="email" class="form-control" value="{{ old('email') }}">
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Mot de passe</label>

							<div class="col-sm-6">
								<input type="password" name="password" class="form-control">
							</div>
						</div>
						</br>

						<!-- Login Button -->
						<div class="form-group text-right">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i>Connexion
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
