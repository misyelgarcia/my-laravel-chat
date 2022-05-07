@extends('main')


@section('content')
<header>
    <h1>Dashboard</h1>

    <ul class="nav">
    @if( auth()->check() )
                
                    <li>
                        <a href="{{ route('changeProfilePassword') }}" tooltip="Change Password">{{ auth()->user()->name }} | {{ auth()->user()->email }}</a>
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
<div class="dashboard flex-grid row">
{{ csrf_field() }}

    
@if( auth()->check() )
    <div id="left-div" class="col-3"><b>Online Here</b>
        <div id="other-users">
            
        </div>
    </div>
    <div id="Right-div"class="col"><b>Messages Here</b></div>

@else 
    <div id="guest-users">
            <h2>Welcome Guest</h2>
    </div>
@endif
</div>
@endsection