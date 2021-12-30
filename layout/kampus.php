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

  $sqltampil = $pdo->query("SELECT * FROM `pasiensembuh` ORDER BY `pasiensembuh`.`kamar` ASC, `pasiensembuh`.`tglmasuk` DESC");
  $datanya = $sqltampil->fetchAll();

  ?>
<h3>DAFTAR PASIEN YANG SUDAH KELUAR</h3>
<div style="overflow-x: auto">
  <table id="example" class="table" style="width:100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Tanggal Masuk</th>
        <th>Sakit</th>
        <th>Tanggal Sembuh</th>
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
          <td><?php echo gantiformat($data['tglkeluar']); ?></td>
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
        <th>Tanggal Sembuh</th>
      </tr>
    </tfoot>
  </table>
</div>
</div>
</div>
</div>