@extends('layouts.app')

@section('title', '學習歷程 | ')

@section('content')
    <div class="page-header">
        <h1>{{ $user->name }}的學習歷程</h1>
    </div>
    @if (Auth::user()->id != $classes->teacher_id)
        <p>這位同學不是你們班的學生喔！</p>
    @else
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel" style="border-color: #E8DAEF;">
                    <div class="panel-body" style="padding: 30px;">
                        <dl class="dl-horizontal">
                            <dt>名字</dt>
                            <dd>{{ $user->name }}</dd>
                            <dt>班級</dt>
                            <dd>{{ $classes->name }}</dd>
                            <dt>E-mail</dt>
                            <dd><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></dd>
                        </dl>
                    </div>
                    <div class="panel-footer" style="padding: 2px; background-color: #E8DAEF;"></div>
                </div>
            </div>
        </div>
    @endif

@endsection

