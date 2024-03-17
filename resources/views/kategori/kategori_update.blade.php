<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <!-- Contoh link CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Kategori</h2>
        <form action="{{ route('/kategori/kategori_update', $data->kategori_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori_kode">Kode Kategori:</label>
                <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{ $data->kategori_kode }}">
            </div>
            <div class="form-group">
                <label for="kategori_nama">Nama Kategori:</label>
                <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{ $data->kategori_nama }}">
            </div>
            <td>
                <a href="{{ route('kategori.kategori_update') }}" class="btn btn-secondary">Back</a>

            </td>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
