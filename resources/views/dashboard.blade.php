@extends('layouts.app')

@section('title', 'Dashboard | ')

@section('content')
	<div class="page-header">
		<h1>Dashboard</h1>
	</div>
	@foreach ($classes as $class)
		@if (Auth::user()->id == $class->teacher_id)
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">{{ $class->name }}</h3>
				</div>
				<div class="panel-body">
					@foreach ($users as $user)
						@if ($class->id == $user->class_id && $class->teacher_id != $user->id)
							<p>{{ $user->name }}</p>
						@endif
					@endforeach
				</div>
			</div>
		@endif
	@endforeach

@endsection

