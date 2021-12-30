<div class="col col-lg-10 border border-secondary">
    <h1>Input Data Pasien</h1>
    <form method="post" action="<?php echo $serverlink; ?>home/input-simpan">
        <div class="row">
            <div class="col col-lg-6">

                <label>Nama</label><br>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required><br>

                <label>Jenis Kelamin</label><br>
                <select name="jk" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select><br>

                <label>Jenis Penyakit</label><br>
                <input type="text" class="form-control" name="jsakit" placeholder="Jenis Penyakit" required><br>



            </div>
            <div class="col col-lg-6">
                <label>Tanggal Lahir</label><br>
                <input type="date" class="form-control" name="tgllahir" required><br>

                <label>Tanggal Masuk</label><br>
                <input type="date" class="form-control" name="tglmasuk" required><br>
            </div>

        </div>
        <button name="submit" class="btn btn-primary" type="submit">Simpan</button>

    </form>

</div>
</div>
</div>