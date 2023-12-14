@extends('layouts.main')

@section('container')

<h1 class="mt-3 mb-5">Postingan Dengan category {{ $title }}</h1>

@foreach ($categories as $category)
<article>
    <h4><a href="/posts/{{ $category->slug }}">{{ $category->title }}</a></h4>
    <p class="fs-5">{{ $category->head }}</p>
</article>
@endforeach

<a href="/categories" class="btn btn-primary my-5"  > Kembali </a>

@endsection
    