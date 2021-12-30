<div class="col col-lg-10">
    <h3>Pilih Kamar</h3>
    <form method="post" action="<?php echo $serverlink; ?>home/input-simpan-kamar">

        <?php

        $cekkelaskamar = $pdo->query("SELECT * FROM `jeniskamar`");
        $datanyakelaskamar = $cekkelaskamar->fetchAll();

        ?>
        <select name="cekkelaskamar" id="cekkelaskamar" class="form-control" required>
            <option value="">Pilih Kelas Kamar</option>
            <?php
            foreach ($datanyakelaskamar as $datanyakelaskamarnya) {
                $idjeniskamar = $datanyakelaskamarnya['idjkamar'];
            ?>
                <option onclick="carikamar<?php echo $idjeniskamar; ?>()" id="jeniskamar<?php echo $idjeniskamar; ?>" value="<?php echo $idjeniskamar; ?>"><?php echo $datanyakelaskamarnya['jeniskamar']; ?></option>

                <script>
                    function carikamar<?php echo $idjeniskamar; ?>() {
                        var jeniskamar = $('#jeniskamar<?php echo $idjeniskamar; ?>').val();

                        $("#pilihkamar").load("<?php echo $serverlink; ?>layout/tes.php", {
                            jeniskamar: jeniskamar
                        });

                    }
                </script>

            <?php
            }
            ?>
        </select><br>

        <div id="pilihkamar"></div>
        <input type="hidden" name="idpasien" value="<?php echo $ganti1[2];?>">
        <button name="submit" class="btn btn-primary" type="submit">Simpan</button>

    </form>


</div>
</div>
</div>