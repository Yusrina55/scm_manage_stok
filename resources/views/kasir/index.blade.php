@include('layout.header')

    <h3>Transaksi</h3>
    <a href="{{ route('transaksi.create') }}" class="tombol">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allTransaksi as $key => $transaksi)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $transaksi->tanggal_transaksi }}</td> 
                <td>{{ $transaksi->total}}</td>
                <td>
                    <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                        
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="tombol">Edit</a>
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
