@include('layout.header')

    <h3>Detail Transaksi</h3>
    <p>Tanggal: {{ $kasir->tanggal_transaksi }}</p>
    <p>Total: {{ $kasir->total }}</p>

    <h4>Rincian Produk:</h4>
    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Kuantitas</th>
                <th>Harga Satuan</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kasir->detail_kasirs as $detail)
            <tr>
                <td>{{ $detail->produk->nama_produk }}</td>
                <td>{{ $detail->kuantitas }}</td>
                <td>{{ $detail->harga_satuan }}</td>
                <td>{{ $detail->subtotal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@include('layout.footer')
