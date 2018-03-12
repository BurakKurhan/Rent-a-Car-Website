<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>IYTECAR</title>
<meta charset="UTF-8">
<?php
if (isset($_REQUEST["kullanici"])) {
include("db_ayar.php");
$sql = ("select * from uye");
//echo ($_REQUEST["kullanici"]);
}

//$cookie = $_COOKIE['kullanici'];

//echo ($cookie);
//if ($cookie == "online"){

//echo "
//<table width=\"100%\">
//<tr>
//<td width=\"100%\">Kullanýcý Paneli</td>
//<td><a href=\"cikis.php\">Çýkýþ</a></td>
//</tr>
//</table>
//";
//}else{ 
//header('Location: index.php');

?>



<link rel="stylesheet" href="styles/kategoriler.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
<h1>Uye Girisi Yaptiniz</h1>

  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">IYTECAR</a></h1>
      <h2>BURASI SIZIN YERINIZ</h2>
    </div>
    <nav>
      <ul>
        <li><a href="anasayfa.html">ANA SAYFA</a></li>
        <li><a href="kategoriler.html">KATEGORILER</a></li>
        <li><a href="haberbulteni.html">HABER BULTENI</a></li>
        <li><a href="iletisim.html">ILETISIM</a></li>
		<li class="last"><a href="cikis.php">Çýkýþ Yap</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row2">
  <div id="container" class="clear">
 
    <section id="slider"><a href="#"><img src="images/demo/960x360.gif" alt=""></a></section>

    <div id="homepage">
   
      <section id="services" class="clear">
        <article class="one_third">
          <figure><img src="images/demo/290x1801.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>SPOR ARAÇLAR</h2>
              <p>Spor araç sevdalýlarýna özel hýzlý ve güçlü araçlarýmýz.</p>
              <footer class="more"><a href="spor.html">Ýncelemek için týklayýnýz... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/demo/290x1802.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>KLASÝK ARAÇLAR</h2>
              <p> Klasik araç sevdalýlarýna 1900'lerde yaþamak isteyenlere özel  .</p>
              <footer class="more"><a href="klasik.html">Ýncelemek için týklayýnýz... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/demo/290x1803.gif" width="290" height="180" alt="">
            <figcaption>
              <h2>HAVA ARAÇLARI</h2>
              <p> Trafik çilesinden býkýp havada trafiðe çözüm bulmak isteyenlere özel .</p>
              <footer class="more"><a href="hava.html">Ýncelemek için týklayýnýz... &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      
    </div>

  </div>
</div>

<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">IYTECAR <a href="#"></a></p>
  </footer>
</div>
