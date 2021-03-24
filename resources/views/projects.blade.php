<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Include all necessary header components --}}
    @include('includes.head', ['title' => 'Projects'])
</head>
<body>
        {{-- Load all Projects here --}}

    <div class="masonry-wrapper">
        <div class="masonry">
            @for ($i = 0; $i < 30; $i++)

            <div class="masonry-item">
                <img src="https://picsum.photos/<?= rand(200, 350) ?>/<?= rand(300, 350) ?>?image={{10*$i}}" alt="Dummy Image" class="masonry-content">
            </div>

            @endfor
        </div>    
    </div>
    {{-- Load all Javascript files --}}
    @include('includes.scripts')
</body>
</html>