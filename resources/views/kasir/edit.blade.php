@include('layout.header')

    <h3>Edit Transaksi</h3>
    <form action="{{ route('transaksi.update',  $transaksi->id) }}" method="post">
        @csrf 
        <div class="form-group gap-6">
            <label for="">Tanggal Transaksi:</label>
            <input type="date" name="tanggal_transaksi" id="" placeholder="Masukkan tanggal transaksi" value="{{ $transaksi->tanggal_transaksi }}">
            <label for="" style="margin-top: 1rem;">Total:</label>
            <input type="number" name="total" id="" placeholder="Masukkan total" value="{{ $transaksi->total}}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>

        
@include('layout.footer')
