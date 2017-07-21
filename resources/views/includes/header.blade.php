<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">{{ config('app.name', 'Laravel') }}</a>
        
        @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

    </div>
</div>