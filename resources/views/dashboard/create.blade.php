@extends('layouts.main')

@section('container')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
            <div class="card-header " >
                    <h2>Peminjaman Mobil
                        <a href="{{ route('dashboard.index') }}" class="btn btn-primary float-end">Batal </a>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="pull-right">
                    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        </div>

                        <div class="form-group">
                        <label class="font-weight-bold">Nama Peminjam</label>
                            <input type="text" class="form-control" name="nama_peminjam">
                        </div>

                        <div class="form-group">
                            <strong>Plat Mobil</strong>
                              <select class="form-control" name="no_mobil">
                                     <option value="F 8723 HA">F 8723 HA</option>
                                     <option value="F 1372 LU">F 1372 LU</option>
                                     <option value="F 2133 SA">F 2133 SA</option>
                                     <option value="B 5421 KL">B 5421 KL</option>
                                     <option value="B 7312 BG">B 7312 BG</option>
                                     <option value="F 3212 KN">F 3212 KN</option>
                                     <option value="B 4323 TL">B 4323 TL</option>
                              </select>
                         </div>

                         <div class="form-group">
                            <strong>Nama Mobil</strong>
                              <select class="form-control" name="nama_mobil">
                                <option value="Buggati">Buggati</option>
                                <option value="Fortuner">Fortuner</option>
                                <option value="Aventador">Aventador</option>
                                <option value="Audy">AUDY</option>
                                <option value="Avanza">Avanza</option>
                                <option value="Xenia">Xenia</option>
                                <option value="Sopo">Sopo</option>
                              </select>
                         </div>

                        <div class="form-group">
                          <strong>Tanggal peminjaman</strong>
                             <input class="form-control" type="datetime-local" id="meeting-time"name="tanggal_peminjaman" value="2018-06-12T19:30"min="2018-06-07T" max="2040-06-14T">

                             <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" class="form-control" name="image">

                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




