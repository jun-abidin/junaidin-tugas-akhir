<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <h2 align="center"><?php echo strtoupper($ganti1[1]); ?></h2>

                <div class="col-md-6">
                    <h1 class="h2 mb-4">Scriptnya</h1>
                    <div id="autoheight" class="form-group" style="width:100%;">
                        <textarea id="scriptnya" class="tksarea">
<?php echo '<?php
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}
?> 
'; ?>
                        </textarea>
                    </div>
                </div>


                <div class="col-md-6">
                    <h1 class="h2 mb-4">Hasil</h1>
                    <div id="hasil" class="form-group" style="width:100%;">Hasilnya
                    </div>
                </div>





            </div>
            <center><button type="submit" class="btn btn-primary">Submit</button>
            </center>

        </div>

        <script>
            $(document).ready(function() {
                $("p").click(function() {
                    $(this).hide();
                });
            });
        </script>