<nav class="navbar navbar-expand-lg navbar-dark bg-secondary" style="border-top-left-radius: 20px;border-top-right-radius: 20px">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
            aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Profile Manager</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            @if (Route::has('login'))
                        @auth
                            <li class="nav-item active">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a href="{{ route('login') }}" class="nav-link" >Login</a>
                            </li>
                            <li class="nav-item active">
                                <a href="{{ route('register') }}" class="nav-link" >Register</a>
                            </li>
                        @endauth
                @endif
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/persons">Index</a>
            </li>
        </ul>
    </div>
</nav>