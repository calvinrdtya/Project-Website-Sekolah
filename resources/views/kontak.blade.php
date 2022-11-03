@extends ('layouts.main')
@section ('container')
<!-- <h1>Halaman Kontak</h1> -->
    <style>
        body {
            text-align: center;
        }
    </style>
    <div class="card">
    <articel class="mb-5">
    <h2>
        {{ "$Name" }}
    </h2>
    <h5>{{ "$email" }}</h5>
        <img src="img/<?=$image;?>" alt="Name" width="200">
        </div>
@endsection
