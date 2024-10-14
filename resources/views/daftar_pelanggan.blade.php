<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/daftar_pelanggan">
    <title>Pelanggan Form</title>

</head>
<body>
    <div class="container">
        <h2>Tambah Pelanggan</h2>
        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_telepon">No. Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="Masukkan No. Telepon" required>
            </div>
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
