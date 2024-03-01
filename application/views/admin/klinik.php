<div class="container-fluid py-4">
    <div class="row my-4">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sistem Informasi Laboratorium</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    Data Transaksi Klinik
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-sm-6 text-end">
                            <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#largeModal">
                                Registrasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row my-4">
        <div class="modal fade bd-example-modal-lg" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largeModalLabel">Registrasi Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulir -->
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="noRM" class="form-label">No RM</label>
                                        <input type="text" class="form-control" id="noRM" placeholder="Masukan No RM">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kodeReg" class="form-label">Kode Registrasi</label>
                                        <input type="text" class="form-control" id="kodeReg" placeholder="Masukan Kode Reg">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenisPem" class="form-label">Jenis Pemeriksaan *</label>
                                        <input type="text" class="form-control" id="jenisPem" placeholder="Jenis Pemeriksaan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pemeriksaan" class="form-label">Parameter *</label>
                                        <input type="text" class="form-control" id="pemeriksaan" placeholder="Pilih Sampel terlebih dahulu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Catatan" class="form-label">Catatan </label>
                                        <textarea name="catatan" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK *</label>
                                        <input type="number" class="form-control" id="nik" placeholder="Masukan NIK">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukan Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempatLahir" placeholder="Masukan Tempat Lahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggalLahir" placeholder="Masukan tanggal Lahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jenisKelamin" placeholder="Masukan Jenis Kelamin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="noHP" class="form-label">No Hp</label>
                                        <input type="Number" class="form-control" id="noHP" placeholder="Masukan No Hp">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Pemeriksaan</th>
                                <th>Jenis Sample</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>