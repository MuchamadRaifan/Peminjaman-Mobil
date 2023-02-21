@extends('layouts.main')

  @section('container')

  <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-md-12">
              <div class="card border-0 shadow rounded">
              <div class="card-header">
                      <h2>Pinjaman Mobil
                          <a href="{{ route('dashboard.index') }}" class="btn btn-primary float-end">Batal </a>
                      </h2>
                  </div>
                  <div class="card-body">
                      <div class="pull-right">
                      <form action="{{ route('dashboard.update', $dashboard->id) }}" method="POST">

                          @csrf

                          @method('PUT')

                        <div class="form-group">
                          <strong>Tanggal di kembalikan</strong>
                             <input class="form-control" type="date" id="meeting-time"name="tanggal_di_kembalikan">

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
