<?php

namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function index (KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store (Request $request): RedirectResponse
    {

        $request->validate([
            'kodeKategori' => 'bail|required|string|max:255',
            'namaKategori' => 'bail|required|string|max:255',
        ]);

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
