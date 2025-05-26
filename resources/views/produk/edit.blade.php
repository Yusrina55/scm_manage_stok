@include('layout.header')

    <h3>Edit Produk</h3>
    <form action="{{ route('produk.update',  $produk->id) }}" method="post">
        @csrf 
        @method("PUT")
        <div class="form-group gap-6">
            <label for="">Nama Produk:</label>
            <input type="text" name="nama_produk" id="" value="{{ $produk->nama_produk }}">
            <input type="integer" name="harga" id="" value="{{ $produk->harga}}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>

        
@include('layout.footer')
