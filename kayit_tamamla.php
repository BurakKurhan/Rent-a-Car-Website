<!--Ýsmail Burak Kurhan 220201055
    Alpcan Yýldýz 220201049 
	 -->
<?php
 
$ad = $_GET['ad'];
$kullaniciadi = $_GET['kullaniciadi'];
$sifre = $_GET['sifre'];
$posta = $_GET['posta'];
 
if(empty($ad)){
echo("<center><b>Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullanýcý Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>Þifrenizi Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postanýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("db_ayar.php");
$sql = "INSERT INTO uye (ad, kullaniciadi, sifre, email)
values ('$ad', '$kullaniciadi', '$sifre', '$posta')";
$kayit = mysql_query($sql);



	
    $_SESSION['username'] = $kullaniciadi;
    $_SESSION['success'] = "You are now logged in";
    
}
if (isset ($kayit)){
echo "Uye Kaydiniz Basariyla Yapilmistir geri donup giris yapabilirsiniz";
}
else {
echo "Kayýt Baþarýsýz ";
}
?>