@extends('layouts.app')

@section('title', '忘記密碼 | ')

@section('content')
<div class="page-header">
    <h1>忘記密碼</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel" style="border-color: #FF9898;">
                <div class="panel-body" style="padding: 30px; border-color: #FF9898;">
                    @if (session('status'))
                        <div class="alert" style="color: black; background-color: #FFDDDD; border-color: #FFDDDD;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn" style="color: white; background-color: #FF9898; border-color: #FF9898;">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer" style="padding: 2px; background-color: #FF9898;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
