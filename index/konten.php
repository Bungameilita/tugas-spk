<?php
if (isset($_GET['halaman'])) {
 if ($_GET['halaman']=='home') {
  include "home.php";
 }
 elseif ($_GET['halaman']=='data') {
  include "alternatif.php";
 }
 elseif ($_GET['halaman']=='tambah_data') {
  include "tambah_alternatif.php";
 }
 elseif ($_GET['halaman']=='penilaian') {
    include "penilaian.php";
   }
elseif ($_GET['halaman']=='bobot') {
    include "bobot.php";
   }
elseif ($_GET['halaman']=='rangking') {
      include "rangking.php";
     }
 else{
  echo "Halaman tidak ditemukan!";
 }
}else{
 include "home.php";
}
?>