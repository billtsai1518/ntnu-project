@extends('layouts.app')

@section('title', '加入班級 | ')

@section('content')
	<div class="page-header">
		<h1>加入班級</h1>
	</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-info">
			<div class="panel-body" style="padding: 30px;">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('joinclass') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('invite_code') ? ' has-error' : '' }}">
						<label for="invite_code" class="col-md-4 control-label">邀請碼</label>
						<div class="col-md-6">
							<input id="invite_code" type="text" class="form-control" name="invite_code" required>
							@if ($errors->has('invite_code'))
								<span class="help-block">
									<strong>{{ $errors->first('invite_code') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-info">
								加入
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

