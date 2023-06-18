@extends('layouts.main')

@section('container')
  <h1 class="text-center">Data Anak</h1>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Anak</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">BB Saat Lahir</th>
          <th scope="col">TB Saat Lahir</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @if ($anaks !=null)
        @foreach ($anaks as $key => $anak)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $anak->nama_anak }}</td>
          <td>{{ $anak->jenis_kelamin }}</td>
          <td>{{ $anak->tanggal_lahir }}</td>
          <td>{{ $anak->berat_badan_saat_lahir }}</td>
          <td>{{ $anak->tinggi_badan_saat_lahir }}</td>
          <td>
            <a href=""><span data-feather="file-text"></span></a>
          </td>
        </tr>
        @endforeach
        @endif
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,002</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,003</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,004</td>
          <td>text</td>
          <td>random</td>
          <td>layout</td>
          <td>dashboard</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,005</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>placeholder</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,006</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,007</td>
          <td>placeholder</td>
          <td>tabular</td>
          <td>information</td>
          <td>irrelevant</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,008</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,009</td>
          <td>placeholder</td>
          <td>irrelevant</td>
          <td>visual</td>
          <td>layout</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,010</td>
          <td>data</td>
          <td>rich</td>
          <td>dashboard</td>
          <td>tabular</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,011</td>
          <td>information</td>
          <td>placeholder</td>
          <td>illustrative</td>
          <td>data</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,012</td>
          <td>text</td>
          <td>placeholder</td>
          <td>layout</td>
          <td>dashboard</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,013</td>
          <td>dashboard</td>
          <td>irrelevant</td>
          <td>text</td>
          <td>visual</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,014</td>
          <td>dashboard</td>
          <td>illustrative</td>
          <td>rich</td>
          <td>data</td>
          <td>number</td>
        </tr>
        <tr>
          <td>1,015</td>
          <td>random</td>
          <td>tabular</td>
          <td>information</td>
          <td>text</td>
          <td>number</td>
        </tr>
      </tbody>
    </table>
  </div>

  {{-- <section class="container-fluid">
    <div class="card">
        @include ('includes.flash')
        <div class="card-body">
            <table id="data-admin" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th width="40">ID</th>
                    <th>Nama Anak</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>BB Saat Lahir</th>
                    <th>TB Saat Lahir</th>
                    <th width="120">AKSI</th>
                    </tr>
                </thead>
                  <tbody>
                      @if ($anaks !=null)
                          @foreach ($anaks as $key => $anak)
                              <tr>
                                  <td>{{ $key+1 }}</td>
                                  <td>{{ $anak->nama_anak }}</td>
                                  <td>{{ ucwords($anak->jenis_kelamin) }}</td>
                                  <td>{{ $anak->tgl_lahir->format('d F Y') }}</td>
                                  <td>{{ $anak->berat_badan_saat_lahir }}</td>
                                  <td>{{ $anak->tinggi_badan_saat_lahir }}</td>
                                  <td class="text-center">
                                      <a href="{{ route('anak.edit', $anak->id) }}"> 
                                          <button class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Ubah"> 
                                              <i class="fa fa-edit"></i>
                                          </button>
                                      </a>
                                      <form id="delete-anak-{{$anak->id}}" action="/anak/{{$anak->id}}" method="post" style="display: inline;">
                                          @method('DELETE')
                                          @csrf
                                          <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                      </form>
                                  </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @include ('includes.scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#data-admin_length").append('<a  href="{{ route('anak.create') }}"> <button type="button" class="btn btn-outline-primary ml-3">Tambah</button></a>');
                });
            </script> --}}
        @endsection