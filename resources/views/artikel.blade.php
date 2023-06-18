@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $artikel->title }}</h1>
      <p>By. <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a> </p>
      <img src="https://source.unsplash.com/photos/random?" alt="..." class="img-fluid">

      <article class="my-3 fs-5">
        {!! $artikel->body !!}

      </article>
  
      <a href="/artikels" class="d-block mt-3">Back to post></a>
    </div>
  </div>
</div>
    {{-- <h1 class="mb-5">{{ $artikel->title }}</h1>
    <p>By. <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a></p>
     <!-- <h5>{{ $artikel["author"] }}</h5> -->

   {!! $artikel->body !!}
        
   

    <a href="/artikels" class="d-block mt-3">Kembali ke postingan></a> --}}
@endsection