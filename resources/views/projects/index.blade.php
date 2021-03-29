@extends('layouts/default')

@section('title', 'Projects')

@section('content')

    <div class="masonry-wrapper">
        <div class="masonry">
            @foreach ($projects as $p)

            <div class="masonry-item">
                <a href="#">
                    <figure>
                        <img src="https://picsum.photos/<?= rand(200, 350) ?>/<?= rand(300, 350) ?>?image=<?= rand(1, 10) ?>" alt="Dummy Image">
                        <div class="masonry-item-details">
                            <h3 class="content-title"> {{ $p->title }} </h3>
                            <p class="content-text"> {{ $p->short_description }} </p>
                        </div>
                    </figure>
                </a>
            </div>

            @endforeach
        </div>    
    </div>

    <div> <a href="{{ url('/') }}">Back</a></div>

@endsection