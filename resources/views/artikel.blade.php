@extends('layouts.main')

@section('container')
<div class="container">
  <div class="article-container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3 mt-5 article-content" style="font-family: 'Times New Roman', Times, serif;">{{ $artikel->title }}</h1>
      <p style="font-family: Cambria, serif;">By. <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a> </p>
      <img src="https://source.unsplash.com/photos/random?" alt="..." class="img-fluid">

      <article class="article-content my-3 fs-5" style="font-family: Cambria, serif;">
          {!! $artikel->body !!}
      </article>
  
      <a href="/artikels" class="d-block mt-3">Back to post></a>
    </div>
  </div>
  </div>
</div>
    {{-- <h1 class="mb-5">{{ $artikel->title }}</h1>
    <p>By. <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a></p>
     <!-- <h5>{{ $artikel["author"] }}</h5> -->

   {!! $artikel->body !!}
        
   

    <a href="/artikels" class="d-block mt-3">Kembali ke postingan></a> --}}
@endsection