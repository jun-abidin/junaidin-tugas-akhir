<?php
if (empty($_SESSION['namaadmin'])) {
  echo "<script>location.replace('".$serverlink."home/login')</script>"; // Redirect kembali ke halaman index.php
  exit();
  }
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <title><?php echo "Rawat-Inap | " . $ganti1[1]; ?></title>
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/media/js/site.js?_=0c32e5cdbe9b575086edb0b907646184"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Ftable_sorting.html" async></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "order": [
          [3, "desc"]
        ]
      });
    });
  </script>
  <style>
    a {
      color: yellow;
      text-decoration: none;
    }

    a:hover {
      background-color: burlywood;
      color: #000;
    }

    body {
      width: 100%;
      height: 100%;
      background: rgb(105, 155, 200);
      background: -moz-radial-gradient(top left, ellipse cover, rgba(105, 155, 200, 1) 0%, rgba(181, 197, 216, 1) 57%);
      background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%, rgba(105, 155, 200, 1)), color-stop(57%, rgba(181, 197, 216, 1)));
      background: -webkit-radial-gradient(top left, ellipse cover, rgba(105, 155, 200, 1) 0%, rgba(181, 197, 216, 1) 57%);
      background: -o-radial-gradient(top left, ellipse cover, rgba(105, 155, 200, 1) 0%, rgba(181, 197, 216, 1) 57%);
      background: -ms-radial-gradient(top left, ellipse cover, rgba(105, 155, 200, 1) 0%, rgba(181, 197, 216, 1) 57%);
      background: radial-gradient(ellipse at top left, rgba(105, 155, 200, 1) 0%, rgba(181, 197, 216, 1) 57%);

    }

    #swimbi-vertical {
      padding: 8px 0px 0 0px;
      position: relative;
      width: 220px;
      text-align: center;
      z-index: 9999;
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      left: 0px;
    }

    #swimbi-vertical a:not([href]) {
      cursor: default;
    }

    #swimbi-vertical a.B {
      font-weight: bold !important;
    }

    #swimbi-vertical a.I {
      font-style: italic !important;
    }

    #swimbi-vertical a.U {
      text-decoration: underline !important;
    }

    #swimbi-vertical>ul {
      padding: 0;
      width: auto;
      list-style: none;
      position: relative;
      white-space: nowrap;
      display: inline-table;
      font-size: 0px;
    }

    #swimbi-vertical ul,
    #swimbi-vertical li,
    #swimbi-vertical a {
      font-family: Iceland !important;
      margin: 0;
      padding: 0;
    }

    #swimbi-vertical>ul>li {
      background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAjCAYAAABVcWC0AAAAiklEQVQIW03EWQ7BUAAF0Nwd+PJpC+Z5alUNRcxaDYIIEY2xSLdhL13f9Zo8ifNx4H18QrM9QrXeIvMV9CSUmUtUpw+iMrmLxregK1EeXYjS8CwaOESxf5IVekci3z0Quc7+v6yxIzLtLZFubWSp5ppINlYifUkk6otfmk3Ea3MiplpEVDFloXCEX/KmQ23G2ZEYAAAAAElFTkSuQmCC');
      float: left;

      vertical-align: top;
      font-size: 19px;
      width: 100%;
      border-radius: 0px;
      box-shadow: 3px 4px 13px 1px rgba(0, 0, 0, .63);
      position: relative;
    }

    #swimbi-vertical ul li:hover>ul,
    #swimbi-vertical .hvr>ul {
      display: block !important;
      visibility: visible;
      opacity: 1;
      pointer-events: all;
      -webkit-transform: scale3d(1, 1, 1);
      -ms-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
      -webkit-transition: all 0.3s ease-out;
      -ms-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }

    #swimbi-vertical>ul>li:hover>a,
    #swimbi-vertical .hvr>a {
      color: #fefefe !important;
      border-radius: 0px;
      z-index: 9;
      text-shadow: 0px 0px 0px rgba(18, 18, 18, 0) !important;
    }

    #swimbi-vertical ul li a {
      display: block;
      text-decoration: none;
      white-space: nowrap;
    }

    #swimbi-vertical>ul>li>a {
      padding: 0px 26px;
      line-height: 35px;
      height: 35px;
      color: #ffffff;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, .82);
    }

    #swimbi-vertical ul ul {
      font-size: 17px;
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      opacity: 0;
      -webkit-transform: translateY(-20%) scale3d(0.1, 0.1, 0.1);
      -ms-transform: translateY(-20%) scale3d(0.1, 0.1, 0.1);
      transform: translateY(-20%) scale3d(0.1, 0.1, 0.1);
      visibility: hidden;
      display: block;
      pointer-events: none;
      background: #e5e5e5;
      border-radius: 0px;
      width: auto;
      list-style: none;
      min-width: 150px;
      padding: 0px 1px 1px 0px;
      position: absolute;
      z-index: 7;
      margin-top: 0;
      box-shadow: 2px 3px 12px 0px rgba(63, 48, 48, .60);
      top: 35px;
    }

    #swimbi-vertical ul ul.columns {
      font-size: 0px;
    }

    #swimbi-vertical ul ul li.column {
      display: inline-block;
      width: auto;
      vertical-align: top;
    }

    #swimbi-vertical ul ul li.column>ul {
      position: relative;
      display: block;
      box-shadow: none;
      background: none;
      left: 0;
      padding: 0;
      visibility: visible;
      opacity: 1;
      transform: none;
      -ms-transform: none;
      -webkit-transform: none;
    }

    #swimbi-vertical ul ul li.column>ul:hover {
      z-index: 9;
    }

    #swimbi-vertical ul ul li {
      float: none;
      position: relative;
      width: 100%;
      text-align: left;
    }

    #swimbi-vertical ul ul li a {
      padding-left: 15px;
      padding-right: 33px;
      line-height: 32px;
      height: 32px;
      color: #5a5a5a !important;
    }

    #swimbi-vertical ul ul li>a:after {
      content: '';
      position: absolute;
      right: 10px;
      top: 50%;
      width: 0;
      height: 0;
      margin: -3px 5px;
      border-left: 5px #5a5a5a solid;
      border-top: 4px dashed transparent;
      border-bottom: 4px dashed transparent;
      border-right: none;
      display: inline-block;
      overflow: hidden;
    }

    #swimbi-vertical ul ul>li>a:only-child {
      padding-right: 15px;
    }

    #swimbi-vertical ul ul>li>a[data-icon],
    #swimbi-vertical ul.mixicon>li>a {
      padding-right: 59px;
    }

    #swimbi-vertical ul ul>li>a[data-icon]:only-child,
    #swimbi-vertical ul.mixicon>li>a:only-child,
    #swimbi-vertical ul li.column>ul.mixicon>li>a:only-child {
      padding-right: 41px;
    }

    #swimbi-vertical ul li.column>ul>li>a:before,
    #swimbi-vertical ul ul>li>a:only-child:before {
      padding-right: 0px;
    }

    #swimbi-vertical ul li.column>ul>li>a[data-icon]:before,
    #swimbi-vertical ul li.column>ul.mixicon>li>a:before {
      padding-right: 8px;
    }

    #swimbi-vertical ul li.column>ul>li>a[data-icon],
    #swimbi-vertical ul li.column>ul.mixicon>li>a {
      padding-right: 33px;
    }

    #swimbi-vertical ul li.column>ul>li>a[data-icon]:only-child {
      padding-right: 15px;
    }

    #swimbi-vertical ul ul li>a:only-child:after {
      display: none;
    }

    #swimbi-vertical ul ul li:hover>a {
      border-radius: 0px;
      color: #ffffff !important;
    }

    #swimbi-vertical ul ul li:hover>a:after {
      border-left: 5px #ffffff solid;
    }

    #swimbi-vertical ul ul li a:hover {
      border-radius: 0px;
      background: #607289;
    }

    #swimbi-vertical ul ul li a:hover:after {
      border-left: 5px #ffffff solid;
    }

    #swimbi-vertical canvas {
      position: absolute;
      width: 1px;
      height: 1px;
    }

    canvas noscript {
      display: none;
    }

    #swimbi-vertical ul ul {
      position: absolute;
      z-index: 7;
      left: 100%;
      top: 0;
    }

    #ie_message {
      display: none;
    }

    @media screen and (min-width:0\0) {
      #ie_message {
        display: block;
        margin-top: 10px;
        background: #ecc;
      }
    }

    @font-face {
      font-family: 'ifont';
      src: url('https://netdna.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0');
      src: url('https://netdna.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0') format('embedded-opentype'), url('https://netdna.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0') format('woff'), url('https://netdna.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0') format('truetype'), url('https://netdna.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') format('svg');
    }

    #swimbi-vertical ul>li>a:before,
    #swimbi-vertical>ul>li>a:after {
      color: #ffffff;
      font-family: ifont;
      pointer-events: none;
      line-height: 35px;
      font-size: 22px;
      padding: 0 14px 0 0;
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      float: left;
      content: attr(data-icn);
      visibility: hidden;
    }

    #swimbi-vertical>ul>li>a:after {
      visibility: visible;
      position: absolute;
      z-index: 6;
      top: 0;
      left: 26px;
      padding: 0;
      text-shadow: -1px -1px 0 rgba(0, 0, 0, .82);
      transition: all .25s ease-out;
      -webkit-transition: all .25s ease-out;
    }

    #swimbi-vertical>ul>li>a:before,
    #swimbi-vertical>ul>li>a:after {
      width: 22px;
    }

    #swimbi-vertical>ul>li>a[data-icon]:before {
      height: 22px;
    }

    #swimbi-vertical>ul>li>a.empty:before,
    #swimbi-vertical>ul>li>a.empty:after {
      padding: 0;
    }

    #swimbi-vertical>ul>li:hover>a:after,
    #swimbi-vertical>ul>li.hvr>a:after {
      color: #fefefe;
      transform: rotateY(360deg);
      -webkit-transform: rotateY(360deg);
      -ms-transform: rotateY(360deg);
      font-size: 0px;
      left: 26px;
      text-shadow: -1px -1px 0 rgba(18, 18, 18, .82);
    }

    #swimbi-vertical ul ul li a[data-icon]:before,
    #swimbi-vertical ul ul.mixicon>li>a:before {
      visibility: visible;
      float: left;
      color: #5a5a5a;
      line-height: 32px;
      font-size: 18px;
      width: 18px;
      height: 18px;
      padding: 0 8px 0 0;
    }

    #swimbi-vertical ul ul li:hover>a:before {
      color: #ffffff;
    }

    @media (max-width: 799px) {
      #swimbi-vertical ul ul {
        margin-top: 25px;
      }

      #swimbi-vertical ul ul {
        left: 25px !important;
      }

      #swimbi-vertical ul ul li.column {
        display: block;
      }

      #swimbi-vertical ul ul li.column>ul {
        left: 0 !important;
        margin-top: 0;
      }

    }

    #menu ul {
      background: #8AD385;
      width: 100%;
      padding: 0;
      list-style-type: none;
      text-align: left;
    }

    #menu li {
      width: auto;
      height: 40px;
      line-height: 40px;
      border-bottom: 1px solid #e8e8e8;
      padding: 0 1em;
    }

    #menu li a {
      text-decoration: none;
      color: #333;
      display: block;
    }

    #menu li:hover {
      background: #CDE2CD;
    }
  </style>
</head>