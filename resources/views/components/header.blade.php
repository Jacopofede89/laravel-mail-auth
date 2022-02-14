<header>
    <h1>
        Videogames
    </h1>
   
    @auth
        <h1>{{ Auth::user() -> name}} </h1>
        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>

    @else

            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">

                @method('POST')
                @csrf

                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email"> <br>
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password"> <br>
                <br>
                <input type="submit" value="LOGIN">

            </form>

        <div class="register">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
        
                @method('POST')
                @csrf
        
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name"> <br>
        
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email"> <br>
        
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password"> <br>
                
                <label for="password_confirmation">Password confirm</label>
                <input class="form-control" type="password" name="password_confirmation"> <br>
                <br>
                <input type="submit" value="REGISTER">
        
            </form>
        </div>

    @endauth

</header>