@extends('layout')

@section('header')
    {{ $category->name }}
@endsection

@section('content')
    <div class="posts">
        @foreach($category->posts as $post)
            <article>
                <a href="#" class="image"><img src="/storage/{{ $post->image }}" alt="" /></a>
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->excerpt }}</p>
                <ul class="actions">
                    <li><a href="{{ url('/post/' . $post->slug) }}" class="button">More</a></li>
                </ul>
            </article>
        @endforeach
    </div>
@endsection
