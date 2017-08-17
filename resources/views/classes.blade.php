@extends('layouts.app')

@section('title', '班級設定 | ')

@section('content')
	<div class="page-header">
		<h1>班級設定</h1>
	</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-body" style="padding: 30px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('classes') }}-{{ $classes->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">班級名稱</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $classes->name }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('invite_code') ? ' has-error' : '' }}">
                            <label for="invite_code" class="col-md-4 control-label">邀請碼</label>
                            <div class="col-md-6">
                                <input id="invite_code" type="invite_code" class="form-control" name="invite_code" value="{{ $classes->invite_code }}" required>
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
                                    Save
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

