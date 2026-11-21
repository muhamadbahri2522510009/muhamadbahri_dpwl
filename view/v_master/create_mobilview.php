<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Entri Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Mobil_C/index') ?>">Master Mobil</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-car"></i>
                        Form Entri Data Mobil
                    </h3>
                </div>

                <form action="<?= base_url('Mobil_C/simpan') ?>" method="post" enctype="multipart/form-data">

                    <div class="card-body">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="no_plat">No. Plat</label>
                                <input type="text" class="form-control" id="no_plat" name="no_plat"
                                    placeholder="Contoh: BN 1234 AB" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nm_mobil">Nama Mobil</label>
                                <input type="text" class="form-control" id="nm_mobil" name="nm_mobil"
                                    placeholder="Contoh: Toyota Avanza" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nkursi">Jumlah Kursi</label>
                                <input type="number" class="form-control" id="nkursi" name="nkursi" min="1" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nbagasi">Jumlah Bagasi</label>
                                <input type="number" class="form-control" id="nbagasi" name="nbagasi" min="0" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="jns_mobil">Jenis Mobil</label>
                                <select class="form-control" id="jns_mobil" name="jns_mobil" required>
                                    <option value="">-- Pilih Jenis --</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="MPV">MPV</option>
                                    <option value="Minibus">Minibus</option>
                                    <option value="Pickup">Pickup</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="transmisi">Transmisi</label>
                                <select class="form-control" id="transmisi" name="transmisi" required>
                                    <option value="">-- Pilih Transmisi --</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Matic">Matic</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="thn_buat">Tahun Pembuatan</label>
                                <input type="number" class="form-control" id="thn_buat" name="thn_buat"
                                    placeholder="Contoh: 2024" min="1990" max="2100" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="hrg_hari">Biaya Per Hari</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" id="hrg_hari" name="hrg_hari"
                                        placeholder="Contoh: 350000" min="0" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status_unit">Status Unit</label>
                                <select class="form-control" id="status_unit" name="status_unit" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Disewa">Disewa</option>
                                    <option value="Perawatan">Perawatan</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <h5><i class="fas fa-camera"></i> Foto Mobil</h5>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="ft_depan">Foto Depan</label>
                                <input type="file" class="form-control" id="ft_depan" name="ft_depan"
                                    accept=".jpg,.jpeg,.png" required>
                                <small class="text-muted">Format JPG, JPEG atau PNG</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ft_blkg">Foto Belakang</label>
                                <input type="file" class="form-control" id="ft_blkg" name="ft_blkg"
                                    accept=".jpg,.jpeg,.png" required>
                                <small class="text-muted">Format JPG, JPEG atau PNG</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ft_interior">Foto Interior</label>
                                <input type="file" class="form-control" id="ft_interior" name="ft_interior"
                                    accept=".jpg,.jpeg,.png" required>
                                <small class="text-muted">Format JPG, JPEG atau PNG</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cttn_unit">Catatan Unit</label>
                            <textarea class="form-control" id="cttn_unit" name="cttn_unit" rows="3"
                                placeholder="Masukkan catatan mengenai kendaraan"></textarea>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="<?= base_url('Mobil_C/index') ?>" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </section>

</div>