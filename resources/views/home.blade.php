<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Include all necessary header components --}}
    @include('includes.head', ['title' => 'Home'])
</head>
<body>
    <div class="contentWrapper">
        <div class="content">
            <h1>Hi, i'm Max</h1>
        </div>
    </div>
</body>
</html>