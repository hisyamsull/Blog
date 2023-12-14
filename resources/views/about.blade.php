@extends('layouts.main')

@section('container')
<img src="img/hisyam.jpg" alt="hisyam" class=" rounded-circle mb-3 mt-3" style="width: 200px" height="200px">
<h3>Nama :  {{ $nama }} </h3>
<h3>Umur : {{ $umur }} </h3>
<h3>Alamat : {{ $alamat }} </h3>

@endsection
    
    
 