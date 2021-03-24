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
            @for ($i = 0; $i < 10; $i++)

            <div class="masonry-item">
                <img src="https://picsum.photos/<?= rand(200, 350) ?>/<?= rand(300, 350) ?>?image=<?= rand(1, 10)*$i ?>" alt="Dummy Image">
            </div>

            @endfor
        </div>    
    </div>
    
    {{-- Load all Javascript files --}}
    @include('includes.scripts')
</body>
</html>