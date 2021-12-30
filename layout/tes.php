<?php
require_once('../database/connection.php');
$jeniskamar = $_POST['jeniskamar'];
$sqlkamar = "SELECT * FROM `kamar` WHERE `jnskamar` = $jeniskamar AND `status` = 0";

$cekkamar = $pdo->query($sqlkamar);
$datanyakamar = $cekkamar->fetchAll();
$jumlahkamar = $cekkamar->rowCount();
echo "<h5>Jumlah Kamar Kosong $jumlahkamar</h5>";
?>
<select name="cekkamar" id="cekkamar" class="form-control" required>
    <option value="">Pilih Kamar</option>
    <?php
    foreach ($datanyakamar as $datanyakamarnya) {
        $idkamar = $datanyakamarnya['idkamar'];
    ?>
        <option value="<?php echo $idkamar; ?>"><?php echo $datanyakamarnya['namakamar'] . $idkamar; ?></option>
    <?php
    }
    ?>
</select><br>




