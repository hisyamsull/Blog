@extends('layouts.main')

@section('container')

<h1>Halaman Categories</h1>
@foreach ($categories as $category)

    <ul>
        <li>
            <h4><a href="/categories/{{ $category->slug }}">{{ $category->nama }}</a></h4>
        </li>
    </ul>
    

    
@endforeach

@endsection
    