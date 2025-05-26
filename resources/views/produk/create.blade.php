@include('layout.header')

    <h3>Buat Produk</h3>
    <form action="{{ route('produk.store') }}" method="post">
        @csrf 
        <div class="form-group gap-6">
            <label for="">Nama Produk:</label>
            <input type="text" name="nama_produk" id="" placeholder="Masukkan nama produk">
            <label for="" style="margin-top: 1rem;">Harga:</label>
            <input type="number" name="harga" id="" placeholder="Masukkan harga">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>

        
@include('layout.footer')
