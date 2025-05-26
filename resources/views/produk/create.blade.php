@include('layout.header')

    <h3>Buat Produk</h3>
    <form action="{{ route('produk.store') }}" method="post">
        @csrf 
        <div class="form-group gap-6">
            <label for="">Nama Produk:</label>
            <input type="text" name="nama_produk" id="" placeholder="Masukkan nama produk">
            <input type="integer" name="harga" id="" placeholder="Masukkan harga jual produk">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>

        
@include('layout.footer')
