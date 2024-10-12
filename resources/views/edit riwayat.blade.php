<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER Pemesanan</title>
    <link rel="stylesheet" href="style/pemesanan.css">
</head>
<body>
    <h1>Edit Pelanggan</h1>
    <form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pelanggan->nama }}" required>
        <label>Alamat:</label>
        <textarea name="alamat" required>{{ $pelanggan->alamat }}</textarea>
        <label>No Telepon:</label>
        <input type="number" name="no_telepon" value="{{ $pelanggan->no_telepon }}" required>
        <button type="submit">Update</button>
    </form>
</body>
