<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jsakit = $_POST['jsakit'];
    $tgllahir = $_POST['tgllahir'];
    $tglmasuk = $_POST['tglmasuk'];
    $sql = $pdo->prepare("INSERT INTO `pasien` (`idpasien`, `namapasien`, `jeniskelamin`, `tgllahir`, `tglmasuk`, `jenis-penyakit`, `kamar`) VALUES (NULL, :a, :b, :c, :d, :e, 0)");
    $sql->bindParam(':a', $nama);
    $sql->bindParam(':b', $jk);
    $sql->bindParam(':c', $tgllahir);
    $sql->bindParam(':d', $tglmasuk);
    $sql->bindParam(':e', $jsakit);
    $sql->execute(); // Eksekusi querynya

    $message = "Data Pasien Disimpan, silahkan tentukan Kamar Pasien an. $nama";
    $_SESSION['pesan'] = $message;
    
    echo "<script>location.replace('$serverlink.home')</script>"; // Redirect kembali ke halaman index.php
}
?>