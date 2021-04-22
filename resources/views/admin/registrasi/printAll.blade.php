<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Semua Data Registrasi</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="font-family: sans-serif" onload="window.print()">
      <br>
      <br>
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <h3 style="text-align: center;">Data Registrasi</h3>
                        <div class="table-responsive">
                              <table class="table table-bordered">
                                    <thead>
                                          <tr>
                                                <th>No</th>
                                                <th>No Daftar</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat Lengkap</th>
                                                <th>Agama</th>
                                                <th>Asal SMP</th>
                                                <th>Jurusan</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($registrasi as $item)
                                                <tr>
                                                      <td>{{ $loop->iteration }}</td>
                                                      <td>{{ $item->no_daftar }}</td>
                                                      <td>{{ $item->nama_lengkap }}</td>
                                                      <td>{{ $item->jk }}</td>
                                                      <td>{{ $item->alamat_lengkap }}</td>
                                                      <td>{{ $item->agama }}</td>
                                                      <td>{{ $item->asal_smp }}</td>
                                                      <td>{{ $item->jurusan }}</td>
                                                </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>