@extends('layouts.app')

@section('title', '建立班級 | ')

@section('content')
	<div class="page-header">
		<h1>建立班級</h1>
	</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-body" style="padding: 30px;">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('createclass') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-md-4 control-label">班級名稱</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" required autofocus>
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-info">
								建立
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer" style="padding: 2px; background-color: #d9edf7;"></div>
		</div>
	</div>
</div>

@endsection

