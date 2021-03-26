<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Include all necessary header components --}}
    @include('includes.head', ['title' => 'Home'])
</head>
<body>
    <div class="splitBackground">
        <div class="content">
            <div class="heading">
                <h1>
                    Hey, i'm Max
                    <span class="icon">✌</span>
                </h1>
            </div>
        </div>
        <nav>
            <ul>
                <li class="nav-item">
                    <a href="{{ url('#') }}"> About </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/projects') }}"> Projects </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('#') }}"> Gallery </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('#') }}"> Contact </a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- Load all Javascript files --}}
    @include('includes.scripts')
</body>
</html>