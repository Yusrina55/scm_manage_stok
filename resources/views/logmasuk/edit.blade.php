@include('layout.header')

    <h3>Edit Log Masuk Produk</h3>

    <form action="{{ route('logmasuk.update', $logmasuk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="produk_id">Nama Produk</label>
        <select name="produk_id" id="produk_id" required>
            <option value="">-- Pilih Produk --</option>
            @foreach ($produkList as $produk)
                <option value="{{ $produk->id }}" {{ $produk->id == $logmasuk->produk_id ? 'selected' : '' }}>
                    {{ $produk->nama_produk }}
                </option>
            @endforeach
        </select>

        <label for="kuantitas_masuk">Kuantitas Masuk</label>
        <input type="number" name="kuantitas_masuk" id="kuantitas_masuk" value="{{$logmasuk->kuantitas_masuk }}" required>

        <label for="harga_supplier">Harga Supplier</label>
        <input type="number" name="harga_supplier" id="harga_supplier" value="{{$logmasuk->harga_supplier }}" required>

        <label for="tanggal_masuk">Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{ \Carbon\Carbon::parse($logmasuk->tanggal_masuk)->format('Y-m-d') }}" required>

        <button type="submit" class="tombol">Update</button>
    </form>

@include('layout.footer')
