<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>CeKing | Beranda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
@extends('layouts.main')
    
@section('container')

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        </div>
      </div>
    </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <div class="container">
      <div class="row ">
          <div class="col-md-4 mb-5">
              <h2><a href="/grafik" class="text-decoration-none text-dark" style="font-weight: bold"> <i class="bi bi-bar-chart-fill"></i> Grafik Pertumbuhan</a> </h2>
              <p style="font-family: Cambria, serif;">Grafik pertumbuhan akan merekam pertumbuhan si kecil setiap bulannya.</p>
          </div>
          <div class="col-md-4 mb-3">
            <h2><a href="/konsultasi" class="text-decoration-none text-dark" style="font-weight: bold"> Konsultasi</a> </h2>
            <p style="font-family: Cambria, serif;">Chat dengan dokter atau tenaga ahli terkait pertumbuhan si kecil.</p>
           </div>
           <div class="col-md-4 mb-3">
          <h2><a href="/artikels" class="text-decoration-none text-dark" style="font-weight: bold"> Artikel</a> </h2>
          <p style="font-family: Cambria, serif;">Artikel seputar pertumbuhan dan perkembangan si kecil yang dapat menambah pengetahuan bunda.</p>
         </div>
         <div class="col-md-4 mb-3">       
          <h2><a href="/makanan" class="text-decoration-none text-dark" style="font-weight: bold"> Rekomendasi Makanan</a> </h2>
          <p style="font-family: Cambria, serif;">Rekomendasi makanan sehat dan bergizi untuk si kecil agar memiliki nutrisi yang cukup.</p>
         </div>
    </div>
    </div>
    <!-- Three columns of text below the carousel -->
    {{-- <div class="row">
        <div class="col-md-6">
        <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777"/>
          <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2><a href="/grafik" class="text-decoration-none"><i class="bi bi-bar-chart-fill"></i> Grafik Pertumbuhan</a> </h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div><!-- /.col-lg-4 -->
    </div>
    <div class="col-md-6">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2><a href="/konsultasi" class="text-decoration-none">Konsultasi</a></h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>

      </div><!-- /.col-lg-4 -->
    </div>
    <div class="col-md-6">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2><a href="/artikels" class="text-decoration-none">Artikel</a></h2>
        <p>And lastly this, the third column of representative placeholder content.</p>

      </div><!-- /.col-lg-4 -->
    </div>
      <div class="col-md-6">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2><a href="/makanan" class="text-decoration-none">Rekomendasi Makanan Sehat</a></h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>

      </div><!-- /.col-lg-4 -->
      </div>
    </div><!-- /.row --> --}}


    <!-- START THE FEATURETTES -->

    {{-- <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider"> --}}

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  {{-- <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer> --}}
</main>
@endsection

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
