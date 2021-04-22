@extends('layouts.admin')

@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
            <div class="header-body">
                  <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Registrasi</h6>
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                          <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">Registrasi</li>
                                    </ol>
                              </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                              <a href="#" class="btn btn-sm btn-neutral">New</a>
                              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                  </div>
            </div>
      </div>
</div>
<div class="container-fluid mt--6">
      <div class="row">
            <div class="col">
                  <div class="card">
                        <div class="card-header card-header-primary">
                              <h1 class="title ">Edit Data Registrasi</h1>
                        </div>
                        <form action="{{ route('admin.registrasi.update', $registrasi->id) }}" method="post">
                              @csrf
                              @method('PUT')
                              <div class="form-group col-12">
                                    <label for="example-text-input" class="form-control-label">No Daftar</label>
                                    <input class="form-control" type="text" name="no_daftar" value="{{ $registrasi->no_daftar }}" readonly>
                                </div>
                              <div class="form-group col-12">
                                  <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                  <input class="form-control" type="text" name="nama_lengkap" value="{{ $registrasi->nama_lengkap }}" required>
                              </div>
                              <div class="form-group col-12">
                                    <label for="example-password-input" class="form-control-label">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                          <option>{{ $registrasi->jk }}</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                    </select>
                              </div>
                              <div class="form-group col-12">
                                    <label for="example-text-input" class="form-control-label">Alamat Lengkap</label>
                                    <textarea name="alamat_lengkap" class="form-control" id="" cols="10" rows="5">{{ $registrasi->alamat_lengkap }}</textarea>
                              </div>
                              <div class="form-group col-12">
                                    <label for="example-text-input" class="form-control-label">Agama</label>
                                    <select name="agama" id="agama" class="form-control" required>
                                          <option>{{ $registrasi->agama }}</option>
                                          <option value="Islam">Islam</option>
                                          <option value="Katolik">Katolik</option>
                                          <option value="Protestan">Protestan</option>
                                          <option value="Hindu">Hindu</option>
                                          <option value="Buddha">Buddha</option>
                                          <option value="Khonghucu">Khonghucu</option>
                                    </select>
                              </div>
                              <div class="form-group col-12">
                                    <label for="example-text-input" class="form-control-label">Asal SMP</label>
                                    <input class="form-control" type="text" name="asal_smp" value="{{ $registrasi->asal_smp }}" required>
                              </div>
                              <div class="form-group col-12">
                                    <label for="example-password-input" class="form-control-label">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                          <option>{{ $registrasi->jurusan }}</option>
                                          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                          <option value="Tata Boga">Tata Boga</option>
                                          <option value="Tata Busana">Tata Busana</option>
                                          <option value="Multimedia">Multimedia</option>
                                    </select>
                              </div>
                              <div class="card-header card-header-primary">
                                    <!-- Button trigger modal -->
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          Update
                                    </button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Perubahan selesai
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary">Save Perubahan</button>
          </div>
        </div>
      </div>
</div>
@endsection