<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    
    public function index()
    {
        $registrasi = Registrasi::latest()->get();
        return view('admin.registrasi.index', compact('registrasi'));
    }

    public function dataRegistrasi()
    {
        $registrasi = Registrasi::latest()->get();
        return view('dataRegistrasi', compact('registrasi'));
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function create()
    {
        $number = Registrasi::count();
        if($number > 0)
        {
            $number = Registrasi::max('no_daftar');
            $strnum = substr($number, 2, 3);
            $strnum = $strnum + 1;
            if (strlen($strnum) == 3) {
                $no_daftar = $strnum;
            } else if (strlen($strnum) == 3) {
                $no_daftar = "0" . $strnum;
            } else if (strlen($strnum) == 2) {
                $no_daftar = "00" . $strnum;
            } else if (strlen($strnum) == 1) {
                $no_daftar = "000" . $strnum;
            }
        } else {
            $no_daftar = "0001";
        }
        return view('registerasi', compact('no_daftar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_daftar' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat_lengkap' => 'required',
            'agama' => 'required',
            'asal_smp' => 'required',
            'jurusan' => 'required',
        ]);
        Registrasi::create($request->all());
        return redirect()->route('data-registrasi')->with('success', 'Data tersimpan dan data bisa dicetak atau pdf');
    }

    public function print($id) {
        $registrasi = Registrasi::findOrFail($id);
        return view('print',  compact('registrasi'));
    }

    public function edit($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        return view('admin.registrasi.edit', compact('registrasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_daftar' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat_lengkap' => 'required',
            'agama' => 'required',
            'asal_smp' => 'required',
            'jurusan' => 'required',
        ]);
        Registrasi::findOrFail($id)->update($request->all());
        return redirect()->route('admin.registrasi.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = Registrasi::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.registrasi.index')->with('success', 'Data sudah dihapus');
    }

    public function printAll() {
        $registrasi = Registrasi::latest()->get();
        return view('admin.registrasi.printAll',  compact('registrasi'));
    }
}
