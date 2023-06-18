@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">Konten Artikel</h1>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/artikels">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit" >Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($artikels->count())
      
    @foreach ($artikels as $artikel )
    <div class="card mb-3" style="max-width: 800px;">
        <div class="row justify-content-center g-1">
          <div class="col-md-6">
            <img src="https://source.unsplash.com/photos/random?" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">{{ $artikel->title }}</h5>
                <small class="text-muted">
                  By: <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a> {{ $artikel->created_at->diffForHumans() }}
                  </small>
                <p class="card-text">{{ $artikel->excerpt }}</p><a href="/artikels/{{ $artikel->slug }}"class="btn btn-primary">Read more</a>
              
              </div>
          </div>
        </div>
      </div>

    {{-- <div class="card mb-3" style=>
        <img src="https://source.unsplash.com/random" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $artikel->title }}</h5>
          <small class="text-muted">
            By: <a href="/user/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a> {{ $artikel->created_at->diffForHumans() }}
            </small>
          <p class="card-text">{{ $artikel->excerpt }}</p><a href="/artikels/{{ $artikel->slug }}"class="btn btn-primary">Read more</a>
        </div>
      </div> --}}
        {{-- <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/artikels/{{ $artikel->slug }}" class="text-decoration-none" >{{ $artikel->title }}</a>
        </h2>
        <p> By: <a href="/authors/{{ $artikel->user->username }}" class="text-decoration-none">{{ $artikel->user->name }}</a></p> 

        <p>{{ $artikel->excerpt }}</p>

        <a href="/artikels/{{ $artikel->slug }}" class="text-decoration-none">Read more...</a>
        </article> --}}
    @endforeach

    @else
        <p class="text-center fs-4">Tidak ada artikel yang ditemukan.</p>
    @endif

@endsection