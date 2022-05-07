@extends('main')

@section('content')
<header>
    <h1>Login</h1>
</header>
<div class="login">
<form id="formLogin" method="POST" action="/login">
    {{ csrf_field() }}

    <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  required maxlength="200"  placeholder="juan@example.com">
    </div>

    <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required maxlength="200"  placeholder="Password">
    </div>

    <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary register-button">Submit</button>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
</div>
@endsection