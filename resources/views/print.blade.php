<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Data Peserta Didik Baru</title>
</head>
<body style="font-family: sans-serif" onload="window.print()">
      <center>
          <table width="94%" border="0">
              {{-- <tr>
                  <td rowspan="4" width="10%">
                      <center><div><img src="{{ asset('AdminLTE/assets/img/wk.png') }}" width="100px"></div></center>
                  </td> --}}
                  <td>
                      <b>PENERIMAAN PESERTA DIDIK BARU</b><br>
                      <b>SMK SEMANGAT 45 BELAJAR</b><br>
                  </td>
              </tr>
      
          </table>
      </center>
        <br>
        <center><b>TANDA BUKTI REGISTRASI</b></center>
        <br>
          
        <table width="55%" border="0" style="margin-left:3%;margin-right:2%;float:left">
            <tr>
                <td colspan="3" style="background-color: lightgray"><center><b>DATA PESERTA DIDIK BARU</b></center></td>
            </tr>
            <tr>
                <td width="30%"><b>No Daftar </b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->no_daftar}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Nama Lengkap</b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->nama_lengkap}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Jenis Kelamin </b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->jk}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Alamat Lengkap</b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->alamat_lengkap}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Agama </b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->agama}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Asal SMP </b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->asal_smp}}</td>
            </tr>
            <tr>
                <td width="30%"><b>Jurusan </b></td>
                <td width="3%">:</td>
                <td>{{$registrasi->jurusan}}</td>
            </tr>
        </table>
      </body>
</html>