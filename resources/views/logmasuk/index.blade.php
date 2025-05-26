@include('layout.header')

<h3>Log Masuk Produk</h3>
<a href="{{ route('logmasuk.create') }}" class="tombol">Tambah</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kuantitas Masuk</th>
            <th>Harga Supplier</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allLog as $key => $log)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $log->produks->nama_produk}}</td>
            <td>{{ $log->kuantitas_masuk }}</td>
            <td>{{ $log->harga_supplier }}</td>
            <td>{{ $log->tanggal_masuk }}</td>
            <td>
                <form action="{{ route('logmasuk.destroy', $log->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                    <a href="{{ route('logmasuk.edit', $log->id) }}" class="tombol">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="tombol">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')