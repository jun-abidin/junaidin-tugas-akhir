<?php
class access
{
    public $data;
    function set_link($data)
    {
        $this->data = $data;
        $cekspasi = str_replace(" ","-", "$this->data");
        $ganti = str_replace("$this->data", "/$this->data/", "$cekspasi");
        $ganti1 = explode("/", $ganti);
        //$jumlah = count($ganti1);
        // echo $jumlah . '<br>';
        // print_r($ganti1) ;
        if (empty($ganti1[1])) {
            $ganti1[1] = "page";
            $include = "layout/$ganti1[1].php";
            echo '<script>location.replace("home")</script>';
            exit();    
        } else if (file_exists("layout/$ganti1[1].php")) {
            include_once('database/connection.php');
            include_once('layout/header.php');
            include_once('layout/kopatas.php');
            include_once('layout/sidebar.php');
            $include = "layout/$ganti1[1].php";
            include_once($include);
            include_once('layout/footer.php');
            exit();    
        } else {
            include_once('database/connection.php');
            include_once('layout/header.php');
            include_once('layout/kopatas.php');
            include_once('layout/sidebar.php');
            $ganti1[1] = "404";
            $include = "layout/$ganti1[1].php";
            include_once($include);
            include_once('layout/footer.php');
            exit();
            //        echo '<script>location.replace("404")</script>';
        }
        // echo $include;

        exit();
        return;
    }
}
