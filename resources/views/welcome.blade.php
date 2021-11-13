@extends('layouts.layout')


<body class="antialiased">
    <div id="divLogin">
        @if (Route::has('login'))
        <div>
            <a href="/blog"> Blogs</a>
            @auth
            <a href="{{ url('/dashboard') }}">|| Dashboard</a>
            @else
            <a href="{{ route('login') }}"> || Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">|| Register</a>
            @endif
            @endauth

        </div>
        @endif

    </div>

    </div>
</body>

</html>