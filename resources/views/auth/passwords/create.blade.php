@extends('main')

@section('content')
            <header>
                <h1>Change Password</h1>

                <ul class="nav">
                @if( auth()->check() )
                            
                                <li>
                                    <a href="#">{{ auth()->user()->name }} | {{ auth()->user()->email }}</a>
                                </li>
                                <li>
                                    <a href="/privatechats">Dashboard</a>
                                </li>
                                
                                <li>
                                    <a href="/logout">Logout</a>
                                </li>
                @else 
                    <li>
                        <a href="/login">Login</a>
                    </li>
                                
                    <li>
                        <a href="/register">Register</a>
                    </li>
                @endif
                
                </ul>
            </header>

<div class="container  profile">
    <div class="row">

        <div class="col-md-10 offset-2">
            <div class="panel panel-default">
            @if( auth()->check() )
                <div class="panel-body ">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary  change-password-button">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection