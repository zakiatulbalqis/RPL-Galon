<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUANTER Pemesanan</title>
    <link rel="stylesheet" href="style/riwayat pemesanan.css">
</head>
<body>
    <h1>Daftar Pelanggan</h1>
    <a href="{{ route('pelanggans.create') }}">Tambah Pelanggan</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->no_telepon }}</td>
                    <td>
                        <a href="{{ route('pelanggans.edit', $pelanggan->id) }}">Edit</a>
                        <form action="{{ route('pelanggans.destroy', $pelanggan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
