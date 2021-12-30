<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 border border-secondary">
      <div id="menu">
        <h4>MENU</h4>
        <ul>
          <li><a href="<?php echo $serverlink; ?>home">BERANDA</a></li>
          <li><a href="<?php echo $serverlink; ?>home/input">INPUT PASIEN</a></li>
          <li><a href="<?php echo $serverlink; ?>home/sehat">DATA PASIEN SEMBUH</a></li>
          <li><a href="<?php echo $serverlink; ?>home/logout">LOGOUT</a></li>
        </ul>

        <h4>CEK KAMAR</h4>
        <ul class="list-group">

        <?php
        $sqlkelaskamar = $pdo->query("SELECT * FROM `jeniskamar`");
        $sqldatanyakelaskamar = $sqlkelaskamar->fetchAll();

        foreach ($sqldatanyakelaskamar as $sqldatanyakelaskamarnya) {
          ?>
          <li class="list-group-item list-group-item-primary">
          <?php
          echo $sqldatanyakelaskamarnya['jeniskamar']."</li>";
          $jnskamar = $sqldatanyakelaskamarnya['idjkamar'];
          $kamarkosong = $pdo->query("SELECT * FROM `kamar` WHERE `jnskamar` = $jnskamar AND `status` = 0");
          $hslkamarkosong = $kamarkosong->rowCount();
          $sumkamar = $pdo->query("SELECT * FROM `kamar` WHERE `jnskamar` = $jnskamar");
          $hslsumkamar = $sumkamar->rowCount();
          ?>
          <li class="list-group-item list-group-item-light">
          <?php
          echo "Kosong $hslkamarkosong dari $hslsumkamar </li>";
        }
        ?>

        </ul>
      </div>
    </div>