<?php
 
$kullaniciadi = $_GET['kullaniciadi'];
$sifre = $_GET['sifre'];
 
if ((!$kullaniciadi =="") and (!$sifre =="")) {
include("db_ayar.php");
$sql = "select * from uye where kullaniciadi='$kullaniciadi' and sifre='$sifre' ";
$kontrol = mysql_query($sql);
$kayitsayisi = mysql_num_rows($kontrol);
if ($kayitsayisi == "0") {
header ("Location: giris.php?hata=yes");
} else {
$kontrol_ok = mysql_fetch_array($kontrol);
setcookie ("kullanici", "$kontrol_ok[kullaniciadi]");
header ("Location: uye_panel.php");
}
}
else {
header ("Location: giris.php?hata=yes");
}
?>