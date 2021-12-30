<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idpasien = $_POST['idpasien'];
    $cekkamar = $_POST['cekkamar'];
    // echo $idpasien.'<br>';
    // echo $cekkamar.'<br>';
    $sqlkamar = $pdo->prepare("UPDATE `pasien` SET `kamar` = '$cekkamar' WHERE `pasien`.`idpasien` = $idpasien");
    $sqlkamar->execute(); // Eksekusi querynya

    $sqlruangkamar = $pdo->prepare("UPDATE `kamar` SET `status` = '$idpasien' WHERE `kamar`.`idkamar` = $cekkamar; ");
    $sqlruangkamar->execute(); // Eksekusi querynya

    $message = "Data Disimpan";
    $_SESSION['pesan'] = $message;
    
    echo "<script>location.replace('$serverlink.home')</script>"; // Redirect kembali ke halaman index.php
}
?>
