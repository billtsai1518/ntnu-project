@extends('layouts.app')

@section('title', 'Dashboard | ')

@section('content')
	<div class="page-header">
		<h1>Dashboard</h1>
	</div>
	<a href="{{ url('createclass') }}" class="btn btn-info" role="button" style="margin: 0 0 1em 1.5em;">建立班級</a>
	<a href="{{ url('joinclass') }}" class="btn btn-info" role="button" style="margin: 0 0 1em 1.5em;">加入班級</a>
	@foreach ($classes as $class)
		@if (Auth::user()->id == $class->teacher_id)
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">{{ $class->name }}<span style="float: right;">邀請碼：{{ $class->invite_code }}</span></h3>
				</div>
				<div class="panel-body">
					<p>學生：
						@foreach ($users as $user)
							@if ($class->id == $user->class_id && $class->teacher_id != $user->id)
								{{ $user->name }}&nbsp;
							@endif
						@endforeach
					</p>
				</div>
			</div>
		@endif
	@endforeach

@endsection

