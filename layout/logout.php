<?php
unset($_SESSION['namaadmin']);
echo "<script>location.replace('".$serverlink."home/login')</script>"; // Redirect kembali ke halaman index.php
exit();
?>
