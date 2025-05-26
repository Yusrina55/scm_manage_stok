@include('layout.header')

    <div class="container">
        <h3>Transaksi</h3>

        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" required>
            </div>

            <h4>Detail Produk:</h4>
            <div id="produk-container">
                <div class="produk-item form-group" style="display:flex; gap:10px;">
                    <select name="produk_id[]" required style="flex:1;">
                        <option value="" disabled selected>Pilih Produk</option>
                        @foreach ($produkList as $produk)
                            <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                        @endforeach
                    </select>
                    <input type="number" name="kuantitas[]" placeholder="Kuantitas" min="1" required style="width:100px;">
                    <input type="number" name="harga_satuan[]" placeholder="Harga Satuan" min="0" step="0.01" required style="width:130px;">
                </div>
            </div>

            <button type="button" class="tombol" onclick="tambahProduk()" style="margin-bottom: 15px;">+ Tambah Produk</button>

            <button type="submit" class="tombol">Simpan</button>
        </form>
    </div>

    <script>
        function tambahProduk() {
            const container = document.getElementById('produk-container');
            const item = document.querySelector('.produk-item').cloneNode(true);
            // Reset nilai input pada produk baru
            item.querySelector('select').selectedIndex = 0;
            item.querySelectorAll('input').forEach(input => input.value = '');
            container.appendChild(item);
        }
    </script>

@include('layout.footer')
