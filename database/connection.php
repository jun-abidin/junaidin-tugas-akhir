<?php
$host = 'localhost'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'rawatinap'; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
$serverlink = "https://".$_SERVER['SERVER_NAME']."/junaidin/";
// $serverlink = "https://localhost/";

function antiinjec($data) {
  $hasil = addslashes(trim($data));
  return $hasil;
}

function jkelamin($kelamin) {
    switch ($kelamin) {
        case "L":
          echo "Laki-laki";
          break;
        case "P":
          echo "Perempuan";
          break;
       default:
          echo "";
      }
    return;
}

function formatIndo($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );
    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";

    //untuk menampilkan hari, tanggal bulan tahun
    return "$tanggal $bulan $tahun";
}

function gantiformat($waktu)
{
    $date=date_create($waktu);
    echo date_format($date,"d/m/Y");
    return;
}

function cekkamar($kamar)

{
    switch ($kamar) {
        case "":
          echo "Belum ada kamar";
          echo "<i class='material-icons' style='font-size:15px;color:white;'>add_circle_outline</i>";
          break;
          case NULL:
            echo "Belum ada kamar";
            echo "<i class='material-icons' style='font-size:15px;color:white;'>add_circle_outline</i>";
            break;
          case "P":
          echo "Kamar";
          break;
       default:
       echo "Belum ada kamar";
       echo "<i class='material-icons' style='font-size:15px;color:white;'>add_circle_outline</i>";
   }
    return;
}
