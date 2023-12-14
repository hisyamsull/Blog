@extends('layouts.main')

@section('container')

<h2> {{ $post->title }} </h2>
<h5>by : Hisyam Setiawan</h5>
<h5>category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a></h5>
<p class="fs-5">{!! $post->body !!}</p>
<a class=" btn-primary btn my-5" href="/posts">kembali</a>

@endsection
    