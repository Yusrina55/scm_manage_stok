@include('layout.header')

<h3>Buat Log Masuk</h3>

<form action="{{ route('logmasuk.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="produk_id">Nama Produk:</label>
        <select name="produk_id" id="produk_id" required>
            <option value="">-- Pilih Produk --</option>
            @foreach ($produkList as $produk)
                <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
            @endforeach
        </select>

        <label for="kuantitas_masuk">Kuantitas Masuk:</label>
        <input type="number" name="kuantitas_masuk" id="kuantitas_masuk" placeholder="Masukkan kuantitas barang masuk" required>

        <label for="harga_supplier">Harga Supplier:</label>
        <input type="number" name="harga_supplier" id="harga_supplier" placeholder="Masukkan harga beli supplier" required>

        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" id="tanggal_masuk" required>
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
