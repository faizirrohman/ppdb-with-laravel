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
                        <!-- Card header -->
                        <div class="card-header card-header-primary">
                              <h1 class="card-title ">Data Registrasi</h1>
                              <a target="blank" href="{{ route('admin.registrasi.printAll') }}" class="btn btn-success">Export PDF</a>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                              <table class="table align-items-center table-flush"  id="example">
                                    <thead class="thead-light">
                                          <tr>
                                                <th scope="col" class="sort" data-sort="name">No</th>
                                                <th scope="col" class="sort" data-sort="name">No Daftar</th>
                                                <th scope="col" class="sort" data-sort="budget">Nama Lengkap</th>
                                                <th scope="col" class="sort" data-sort="status">Jenis Kelamnin</th>
                                                <th scope="col" class="sort" data-sort="budget">Alamat Lengkap</th>
                                                <th scope="col" class="sort" data-sort="status">Agama</th>
                                                <th scope="col" class="sort" data-sort="status">Asal SMP</th>
                                                <th scope="col" class="sort" data-sort="status">Jurusan/th>
                                                <th scope="col">Action</th>
                                          </tr>
                                    </thead>
                                    <tbody class="list">
                                          @foreach ($registrasi as $item)
                                          <tr>
                                                <td class="budget">{{ $loop->iteration }}</td>
                                                <td class="budget">{{ $item->no_daftar }}</td>
                                                <td class="budget">{{ $item->nama_lengkap }}</td>
                                                <td class="budget">{{ $item->jk }}</td>
                                                <td class="budget">{{ $item->alamat_lengkap }}</td>
                                                <td class="budget">{{ $item->agama }}</td>
                                                <td class="budget">{{ $item->asal_smp }}</td>
                                                <td class="budget">{{ $item->jurusan }}</td>
                                                <td class="text-right">
                                                      <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                  <a class="dropdown-item" href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action' , '{{ route('admin.registrasi.destroy', $item->id) }}')">Hapus</a>
                                                                  <a class="dropdown-item" href="{{ route('admin.registrasi.edit' , $item->id) }}">Edit</a>
                                                            </div>
                                                      </div>
                                                </td>
                                          </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="modal fade" id="modalDelete">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true"></span>
            </button>
            <h4 class="modal-title">Anda yakin akan mengubah data ini</h4>
          </div>
          <div class="modal-footer">
            <form action="" id="formDelete" method="get">
              <button class="btn btn-default" data-dismiss="modal" >Tidak</button>
              <button class="btn btn-danger" type="submit">YA</button>
            </form>
          
          </div>  
        </div>
      </div>
    </div>

@endsection