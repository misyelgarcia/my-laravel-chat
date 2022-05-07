@extends('main')

@section('content')
<header>
    <h1>Register</h1>
</header>
<div class="register">
<form id="formRegister" method="POST" action="/register">
    {{ csrf_field() }}

    <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="200" placeholder="Juan Sample">
    </div>

    <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  required maxlength="200"  placeholder="juan@example.com">
    </div>

    <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required maxlength="200"  placeholder="Password">
    </div>

        <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required maxlength="200"  placeholder="Re-enter Password">
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