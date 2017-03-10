@extends('layouts.app')

@section('title', '註冊 | ')

@section('content')
<div class="page-header">
	<h1>註冊</h1>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-warning">
			<div class="panel-body" style="padding: 30px;">
				<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-md-4 control-label">Name</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">E-Mail Address</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password" required>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>
					
					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-warning">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer" style="padding: 2px; background-color: #faebcc;"></div>
		</div>
	</div>
</div>
@endsection
