    <div class="col col-lg-10 border border-secondary">
        <h1>Input Data Pasien</h1>
        <?php
        $iddatanya = antiinjec($ganti1[2]);
        if (empty($iddatanya)) {
            echo 'kosong';
            exit();
        }

        $sqltampil = $pdo->query("SELECT * FROM `pasien` WHERE `idpasien` = '$iddatanya'");
        $jumlahpasien = $sqltampil->rowCount();
        if (empty($jumlahpasien)) {
            exit();
        } else {
            $datanya = $sqltampil->fetch();

        ?>
            <form method="post" action="<?php echo $serverlink; ?>home/editpasien-simpan">
                <div class="row">
                    <div class="col col-lg-6">

                        <label>Nama</label><br>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $datanya['idpasien']; ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $datanya['namapasien']; ?>" required><br>

                        <label>Jenis Kelamin</label><br>
                        <select name="jk" class="form-control" required>
                            <option value="<?php echo $datanya['jeniskelamin']; ?>"><?php echo jkelamin($datanya['jeniskelamin']); ?></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select><br>

                        <label>Jenis Penyakit</label><br>
                        <input type="text" class="form-control" name="jsakit" value="<?php echo $datanya['jenis-penyakit']; ?>" required><br>



                    </div>
                    <div class="col col-lg-6">
                        <label>Tanggal Lahir</label><br>
                        <input type="date" class="form-control" name="tgllahir" value="<?php echo $datanya['tgllahir']; ?>" required><br>

                        <label>Tanggal Masuk</label><br>
                        <input type="date" class="form-control" name="tglmasuk" value="<?php echo $datanya['tglmasuk']; ?>" required><br>
                    </div>

                </div>
                <button name="submit" class="btn btn-primary" type="submit">Simpan</button>

            </form>
    </div>
    </div>
    </div>
    <?php
        }
    ?>