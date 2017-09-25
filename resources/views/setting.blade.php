@extends('layouts.app')

@section('title', '設定 | ')

@section('content')
	<div class="page-header">
		<h1>設定</h1>
	</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel" style="border-color: #D2B4DE;">
                <div class="panel-body" style="padding: 30px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('setting') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">名字</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label for="student_id" class="col-md-4 control-label">學號</label>
                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ Auth::user()->student_id }}">
                                @if ($errors->has('student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                            <label for="school" class="col-md-4 control-label">學校</label>
                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" value="{{ Auth::user()->school }}">
                                @if ($errors->has('school'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn" style="color: white; background-color: #D2B4DE; border-color: #D2B4DE;">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer" style="padding: 2px; background-color: #D2B4DE;"></div>
            </div>
        </div>
    </div>

@endsection

