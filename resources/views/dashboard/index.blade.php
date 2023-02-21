@extends('layouts.main')

@section('container')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card shadow p-3 mb-5">
                <div class="card-header" >
                <!-- <img src="/img/2.png" style="width: 200px;"> -->
                <!-- <img src="/img/logo5.png" height="200" width="400px"> -->
                    <h2>Jasa Pinjam Mobil
                        <a href="{{ route('dashboard.create') }}" class="btn btn-primary float-end"><i class="bi bi-bag-plus-fill"></i> Pinjaman Mobil</a>
                    </h2>
                </div>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>Nama Mobil</th>
                        <th>Plat Mobil</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal di Kembalikan</th>
                        <th>Image</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($dashboards as $dashboard)
                    <tr>
                        <td>{{ $dashboard->nama_mobil}}</td>
                         <td>{{ $dashboard->no_mobil }}</td>
                         <td>{{ $dashboard->nama_peminjam }}</td>
                         <td>{{ $dashboard->tanggal_peminjaman }}</td>
                         <td>{{ $dashboard->tanggal_di_kembalikan}}</td>
                         <td>
                             @if ($dashboard->image)
                             <img src="{{ asset('/storage/'. $dashboard->image)}}" alt="" style="max-height: 200px">

                             @else
                            <h3>jhsiudg</h3>
                             @endif
                         </td>
                        <td>
                                <form onsubmit="return confirm('Apa iyah?');" action="{{ route('dashboard.destroy', $dashboard->id) }}" method="POST">
                                <a href="{{ route('dashboard.edit', $dashboard->id) }}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </th>
                    </tr>
        @endforeach
                </table>
            </div>
        </div>
    </div>
    <style>
    </style>
@endsection
