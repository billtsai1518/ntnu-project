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
                    @foreach ($records as $record)
                        @if ($class->id == $record->class_id)
                            @foreach ($users as $user)
                                @if ($record->user_id == $user->id)
                                    <a href="{{ url('user') }}-{{ $user->id }}">{{ $user->name }}</a>&nbsp;
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach

@endsection

