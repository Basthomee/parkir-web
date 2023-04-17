<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Carbon;


class KendaraanController extends Controller
{
    public function index()
    {
        return view('kendaraan');
    }
    public function tampilkan_kendaraan()
    {
        $data = DB::table('kendaraan')->get();
        return view('tampil_kendaraan', ['data' => $data]);
    }

    public function inputMasuk()
    {
        return view('tampil_input_masuk');
    }

    public function kelolaMasuk(Request $request)
    {

        $tanggalMasuk = Carbon::now()->format('Y-m-d');
        $jamMasuk = Carbon::now()->format('G:i:s');
        $platnomor = $request->platnomor;
        $status = "masuk";
        $database = DB::table('kendaraan');



        if ($database->where('platnomor', $platnomor)->exists()) {
            // Jika data sudah ada di database
            // Lakukan sesuatu di sini
            $database->where('platnomor', $platnomor)->update([
                'platnomor' => $platnomor,
                'tglmasuk' => $tanggalMasuk,
                'jammasuk' => $jamMasuk,
                'status' => $status,
                'lantai' => null,
                'namaruang' => null,
                'tglkeluar' => null,
                'jamkeluar' => null,
                'biayaparkir' => null
            ]);

            return redirect()->route('tampil_kendaraan')->with('success', 'Data Berhasil Ditambahkan');


        } else {
            // Jika data belum ada di database
            // Lakukan sesuatu di sini

            $database->insert([
                'platnomor' => $platnomor,
                'tglmasuk' => $tanggalMasuk,
                'jammasuk' => $jamMasuk,
                'status' => $status
            ]);

            // return redirect()->route('/tampil_input_masuk')->with('success', 'Data Berhasil Ditambahkan');
            return view('tampil_input_masuk')->with('success', 'Data Berhasil Ditambahkan');
        }

    }

    public function inputKeluar()
    {
        $data = DB::table('kendaraan')->where('status', 'masuk')->get();
        return view('tampil_input_keluar', ['data' => $data]);
    }

    public function cariPlat(Request $request)
    {
        $data = DB::table('kendaraan')->where('platnomor', $request->platnomor)->get();

        return view('tampil_input_keluar', ['data' => $data]);

    }
    public function kelolaKeluar($id)
    {
        $biaya_parkir = 5000;
        $data = DB::table('kendaraan')->where('id', $id)->first();
        $waktuKeluar = Carbon::now(); // waktu keluar sekarang
        $waktuMasuk = Carbon::parse($data->jammasuk); // waktu masuk dari data kendaraan

        $biaya_parkir = "Rp. " . number_format($biaya_parkir, 0, ',', '.');

        return view('proses_kendaraan_keluar', ['data' => $data, 'biayaparkir' => $biaya_parkir]);
    }

    public function gantiStatusKeluar(Request $request)
    {

        $waktuSekarang = Carbon::now()->format('G:i:s');
        $tanggalSekarang = Carbon::now()->format('Y-m-d');

        $data = DB::table('kendaraan')->where('platnomor', $request->plat)->update([
            'status' => 'keluar',
            'tglkeluar' => $tanggalSekarang,
            'jamkeluar' => $waktuSekarang
        ]);

        return redirect('/kendaraan/inputKeluar');
    }

    public function aturRuang()
    {
        $data = DB::table('kendaraan')->get();
        return view('inputRuang_kendaraan', ['data' => $data]);
    }

    public function cariDinamis(Request $request)
    {
        $cari = $request->cari;
        $data = DB::table('kendaraan')->where('platnomor', $cari)->orWhere('namaruang', $cari)
            ->orWhere('lantai', intval($cari))->get();

        dd($data);
        die();

        return;
    }
}