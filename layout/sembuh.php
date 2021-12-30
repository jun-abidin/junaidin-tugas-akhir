<div class="col col-lg-10 border border-secondary">
    <h1>Input Data Pasien</h1>
    <?php
    $tglkeluar=date('Y-m-d');
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
        $idpasien = $datanya['idpasien'];
        $nama = $datanya['namapasien'];
        $jk = $datanya['jeniskelamin'];
        $jsakit = $datanya['tgllahir'];
        $tgllahir = $datanya['tgllahir'];
        $tglmasuk = $datanya['tglmasuk'];
        $tglkeluar=date('Y-m-d');
        $jenispenyakit = $datanya['jenis-penyakit'];
        $kamar = $datanya['kamar'];
    
        $datakamar = $datanya['kamar'];

        $sqlkamar = $pdo->prepare("UPDATE `kamar` SET `status` = '0' WHERE `kamar`.`idkamar` = $datakamar");
        $sqlkamar->execute();


        $sqlpindah = $pdo->prepare("INSERT INTO `pasiensembuh` (`idpasien`, `namapasien`, `jeniskelamin`, `tgllahir`, `tglmasuk`, `tglkeluar`, `jenis-penyakit`, `kamar`) VALUES (:a, :b, :c, :d, :e, :f, :g, :h)");
        $sqlpindah->bindParam(':a', $idpasien);
        $sqlpindah->bindParam(':b', $nama);
        $sqlpindah->bindParam(':c', $jk);
        $sqlpindah->bindParam(':d', $tgllahir);
        $sqlpindah->bindParam(':e', $tglmasuk);
        $sqlpindah->bindParam(':f', $tglkeluar);
        $sqlpindah->bindParam(':g', $jenispenyakit);
        $sqlpindah->bindParam(':h', $kamar);
        $sqlpindah->execute(); // Eksekusi querynya

        $sqlhapus = $pdo->prepare("DELETE FROM `pasien` WHERE `pasien`.`idpasien` = $idpasien");
        $sqlhapus->execute(); // Eksekusi querynya

        $message = "Data Berhasil dipindah dan dihapus";
        $_SESSION['pesan'] = $message;
    
        echo "<script>location.replace('$serverlink.home')</script>"; // Redirect kembali ke halaman index.php

        
    ?>
</div>
</div>
</div>
<?php
    }
?>

