@extends('layouts.main')

@section('container')


@foreach ($posts as $post)

<article>
    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
    <p class="fs-5">{{ $post->head }}</p>
</article>
    
@endforeach

@endsection
    