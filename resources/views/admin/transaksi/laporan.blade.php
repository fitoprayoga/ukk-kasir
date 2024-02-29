<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h4><b>Pilih Tanggal</b></h4>
                        <form action="/admin/kategori" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for=""><b>Tanggal Awal</b></label>
                                <input type="date" class="form-control @error('tanggalAwal') is-invalid @enderror" name="tanggalAwal" placeholder="Tanggal Awal" value="">
                                @error('tanggalAwal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <a href="/admin/kategori" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>