@extends('layouts.main')

@section('container')

<h1>Berita</h1>
@foreach($posts as $post)

<div class="row">
  <div class="col-md-4">
    <div class="card"style="width : 24rem;">
      <img src="/img/smk.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
      <div class="card-body">
        <h5 class="card-title">{{$post["title"]}}</h5>
        <h5 class="card-title">{{$post["author"]}}</h5>
        <p class="card-text">{{$post["body"]}}</p>
        <a href="/posts/{{$post["slug"]}}"" class="btn btn-primary">Button</a>
      </div>
  </div>
</div>
</div>

@endforeach

@endsection
