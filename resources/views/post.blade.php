@extends('layouts.main')

@section('container')
<h1>Halaman Blog</h1>
<articel>
    <h2>{{$post["title"]}}</h2>
    <h5>{{$post["title"]}}</h5>
    <p>{{$post["body"]}}</p>
</articel>
<a href="/berita">Back to Blog</a>
@endsection