@extends('layouts.app')

@section('title', '學習歷程 | ')

@section('content')
    <div class="page-header">
        <h1>{{ $user->name }}的學習歷程</h1>
    </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel" style="border-color: #E8DAEF;">
                    <div class="panel-body" style="padding: 30px;">
                        <dl class="dl-horizontal">
                            <dt>名字</dt>
                            <dd>{{ $user->name }}</dd>
                            <dt>E-mail</dt>
                            <dd><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></dd>
                            <dt>班級</dt>
                            <dd>
                                @foreach ($records as $record)
                                    @foreach ($classes as $oneclass)
                                        @if ($record->class_id == $oneclass->id)
                                            {{ $oneclass->name }} &nbsp;
                                        @endif
                                    @endforeach
                                @endforeach
                            </dd>
                            <dt>學號</dt>
                            <dd>{{ $user->student_id }}<dd>
                            <dt>學校</dt>
                            <dd>{{ $user->school }}<dd>
                        </dl>
                    </div>
                    <div class="panel-footer" style="padding: 2px; background-color: #E8DAEF;"></div>
                </div>
            </div>
        </div>

@endsection

