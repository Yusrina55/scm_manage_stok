@include('layout.header')

    <h3>Produk</h3>
    <a href="{{ route('produk.create') }}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allProduk as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama_produk }}</td> 
                <td>{{ $r->harga}}</td>
                <td>
                    <form action="{{ route('produk.destroy', $r->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                        
                        <a href="{{ route('produk.edit', $r->id) }}" class="tombol">Edit</a>
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
