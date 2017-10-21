@extends('layouts.app')

@section('title', 'Dashboard | ')

@section('content')
    <div class="page-header">
        <h1>Dashboard</h1>
    </div>
    <a href="{{ url('createclass') }}" class="btn btn-info" role="button" style="margin: 0 0 1em 1.5em;">建立班級</a>
    @foreach ($classes as $class)
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $class->name }}<a href="{{ url('classes') }}-{{ $class->id }}"><span style="float: right;" class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></h3>
            </div>
            <div class="panel-body">
                <p>學生：
                    @foreach ($class->records->unique('user_id') as $record)
                        <a href="{{ url('user') }}-{{ $record->user->id }}">{{ $record->user->name }}</a>&nbsp;
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach

@endsection

