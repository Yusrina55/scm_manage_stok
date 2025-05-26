@include('layout.header')

    <h3>Buat Transaksi</h3>
    <form action="{{ route('transaksi.store') }}" method="post">
        @csrf 
        <div class="form-group gap-6">
            <label for="">Tanggal Transaksi:</label>
            <input type="date" name="tanggal_transaksi" id="" placeholder="Masukkan tanggal transaksi">
            <label for="" style="margin-top: 1rem;">Total:</label>
            <input type="number" name="total" id="" placeholder="Masukkan total">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>

        
@include('layout.footer')
