<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Include all necessary header components --}}
    @include('includes.head', ['title' => 'Home'])
</head>
<body>
    <div class="wrapper">
        <section id="main">
            <div class="about">
                <h1>
                    Hey, i'm Max 
                </h1>
                <p>
                    A student currently studying computer science at the 
                    <a href="https://www.th-brandenburg.de/" target="_blank">THB</a>
                    in Germany, Brandenburg an der Havel.
                </p>
                <p>                    
                    You can find me spending a lot of free time 
                    doing a lot of stuff on my computer.    
                </p>
            </div>
            
            <nav>
                <ul>
                    <li class="nav-item">
                        <a href="{{ url('/projects') }}"> Projects </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/gallery') }}"> Gallery </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/ideas') }}"> Project Ideas </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('#') }}"> Contact </a>
                    </li>
                </ul>
            </nav>
        </section>
        <section id="social-links">
            <div class="links">
                <a href="#" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>
    </div>
    {{-- Load all Javascript files --}}
    @include('includes.scripts')
</body>
</html>