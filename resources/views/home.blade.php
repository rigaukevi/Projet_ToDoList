@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

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
			</div>
		</div>
	</div>
</div>
@endsection
