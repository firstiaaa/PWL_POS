<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'kategori_kode' => 'SNK',
    //         'kategori_nama' => 'Snack/Makanan Ringan',
    //         // 'created_at' => now()
    //     ];
    //     // DB::table('m_kategori')->insert($data);
    //     // return 'Insert data baru berhasil';

    //     // $row = DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama' => 'ATK']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row.' baris ';

    //     $row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
    //     return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row.' baris ';

    //     // $data = DB::table('m_kategori')->get();
    //     // return view ('kategori', ['data' => $data]);
    // }

    public function index (KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }
    public function store (Request $request)
    {
        KategoriModel::create ([
            'kategori_kode' => $request->kodeKategori, 
            'kategori_nama' => $request->namaKategori,
        ]);
            return redirect('/kategori');
    }

    //tugas jb 5

    // Metode untuk menampilkan halaman edit kategori
    public function edit($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori/kategori_update',['data' => $kategori]);
    }

    // Metode untuk menyimpan perubahan pada kategori
    public function update(Request $request, $id)
    {
        $request->validate([
            'kodeKategori' => 'required|string|max:255',
            'namaKategori' => 'required|string|max:255',
            // Anda dapat menambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

}
