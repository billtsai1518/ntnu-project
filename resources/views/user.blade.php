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
                            @foreach ($records->unique('class_id') as $record_unique_class)
                                @if (is_null($record_unique_class->classes))
                                    @continue
                                @endif
                                {{ $record_unique_class->classes->name }} &nbsp;
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
    
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>練習編號</th>
                        <th>Pass作答次數</th>
                        <th>備註</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $record->sort_details_count }}</td>
                            <td>
                                @foreach ($record->sort_details as $sort_detail)
                                    @if ($sort_detail->action_id == 3 || $sort_detail->action_id == 6)
                                        有看過教學影片
                                        @break
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

