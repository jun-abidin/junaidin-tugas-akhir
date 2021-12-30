<div class="col col-lg-10">
  <?php
  // Cek apakah terdapat cookie dengan nama message
  if (isset($_SESSION["pesan"])) { // Jika ada
  ?>
    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?php echo $_SESSION["pesan"] ?>',
        showConfirmButton: false,
        timer: 4500
      })
    </script>

  <?php
  }
  unset($_SESSION["pesan"]);

  $sqltampil = $pdo->query("SELECT * FROM `pasien` ORDER BY `pasien`.`kamar` ASC, `pasien`.`tglmasuk` DESC");
  $datanya = $sqltampil->fetchAll();

  ?>
<h3>DAFTAR PASIEN YANG SEDANG DIRAWAT</h3>
<div style="overflow-x: auto">
  <table id="example" class="table" style="width:100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tanggal Masuk</th>
        <th>Sakit</th>
        <th>Kamar</th>
        <th>Bantuan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datanya as $data) {
      ?>
        <tr>
          <td><?php echo $data['namapasien']; ?></td>
          <td><?php echo jkelamin($data['jeniskelamin']); ?></td>
          <td><?php echo gantiformat($data['tgllahir']); ?></td>
          <td><?php echo gantiformat($data['tglmasuk']); ?></td>
          <td><?php echo $data['jenis-penyakit']; ?></td>
          <td>
            <?php
            $idpasien = $data['idpasien'];
            if ($data['kamar'] == 0) { ?>
              <a class="btn btn-danger" href="<?php echo $serverlink; ?>home/inputkamar/<?php echo $data['idpasien']; ?>"><?php echo cekkamar($data['kamar']); ?></a>
          </td>
        <?php
            } else {
              
              $sqlkamar = "SELECT * FROM `kamar` WHERE `status` = $idpasien";
              $cekkamar = $pdo->query($sqlkamar);
              $datakamar = $cekkamar->fetch();
              $jnskamar = $datakamar['jnskamar'];
              $sqljeniskamar = "SELECT * FROM `jeniskamar` WHERE `idjkamar` = $jnskamar";
              $cekjeniskamar = $pdo->query($sqljeniskamar);
              $datajeniskamar = $cekjeniskamar->fetch();
              echo $datakamar['namakamar'].$datakamar['idkamar']." ".$datajeniskamar['jeniskamar'];
              
            }
        ?>
        <td><a class="btn btn-info" href="<?php echo $serverlink."home/editpasien/".$idpasien;?>">EDIT</a> <a class="btn btn-success" href="<?php echo $serverlink."home/sembuh/".$idpasien;?>">SEMBUH/HAPUS</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tanggal Masuk</th>
        <th>Sakit</th>
        <th>Kamar</th>
        <th>Bantuan</th>
      </tr>
    </tfoot>
  </table>
</div>
</div>
</div>
</div>