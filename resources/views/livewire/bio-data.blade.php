<div>
    <div class="row text-center mb-3">
        <div class="col">
            <h3>Lengkapi Bio Data Anda</h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-auto">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <form enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="NIS">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="col">
                        <select class="form-select">
                          <option>Kartu Identitas</option>
                          <option>KTP</option>
                          <option>KK</option>
                          <option>PASSPORT</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nomor NIK">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Kebangsaan">
                    </div>
                    <div class="col">
                        <select class="form-select">
                            <option>Gender</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col">
                        <label class="form-label">Kota Lahir</label>
                        <input type="text" class="form-control" placeholder="Kota Lahir">
                    </div>
                    <div class="col">
                        <label class="form-label">Provinsi Lahir</label>
                        <input type="text" class="form-control" placeholder="Provinsi Lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Pendidikan Terakhir">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Kelas Paket Keahlian">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-auto text-center pe-3" style="margin-left: auto">
                        <button type="submit" class="btn btn-primary d-flex m-auto">Selesai</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
