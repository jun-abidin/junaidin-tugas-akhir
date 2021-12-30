<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jsakit = $_POST['jsakit'];
    $tgllahir = $_POST['tgllahir'];
    $tglmasuk = $_POST['tglmasuk'];

    echo $id; 
    $sql = $pdo->prepare("UPDATE `pasien` SET `namapasien` = :a, `jeniskelamin` = :b, `tgllahir` = :c, `tglmasuk` = :d, `jenis-penyakit` = :e WHERE `pasien`.`idpasien` = $id ");
    $sql->bindParam(':a', $nama);
    $sql->bindParam(':b', $jk);
    $sql->bindParam(':c', $tgllahir);
    $sql->bindParam(':d', $tglmasuk);
    $sql->bindParam(':e', $jsakit);
    $sql->execute(); // Eksekusi querynya

    $message = "Data Pasien an. $nama berhasil diedit";
    $_SESSION['pesan'] = $message;
    
    echo "<script>location.replace('$serverlink.home')</script>"; // Redirect kembali ke halaman index.php
}
?>