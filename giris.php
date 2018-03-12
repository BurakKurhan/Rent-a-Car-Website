<!--İsmail Burak Kurhan 220201055
    Alpcan Yıldız 220201049 
	 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>IYTECAR</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/kategoriler.css" type="text/css">
</head>
<body>
<center>
<?php
//if (!$hata == "") {
//echo '<font face="verdana" size="2" color="#800000"><b>Giriş Sırasında Hata Oluştu</b><br>';
//echo 'Şifre veya Kullanıcı Adı Yanlış. Tekrar Deneyin<br>';
//}
?>
</center>

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">IYTECAR</a></h1>
      <h2>BURASI SIZIN YERINIZ</h2>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">ANA SAYFA</a></li>
        <li><a href="kategoriler.html">KATEGORILER</a></li>
        <li><a href="haberbulteni.html">HABER BULTENI</a></li>
        <li><a href="iletisim.html">ILETISIM</a></li>
		<li class="last"><a href="giris.php">Giriş Yap</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row2">
  <div id="container" class="clear">

    <div id="homepage">
  
      <section id="services" class="clear">
        <article class="one_third">
          
<form action="giris_tamamla.php" method="get">           
              <h2>Giriş Yap</h2>
               
  <input type="text" placeholder = "Kullanıcı Adı"  name="kullaniciadi" required>
  <input type="password" placeholder = "Sifre " name="sifre" required>
  <button type='submit'value ="Gönder") >Giriş Yap</button>

</form>

          
          </figure>
        </article>
        
        <article class="one_third lastbox">
             <h2>Üye değil misiniz ?</h2>
              <form action="kayit_tamamla.php" method="get">
  <input type="text" placeholder="Ad" name="ad" id ="ad" required>
  <input type="text" placeholder="Kullanıcı Adı" name="kullaniciadi" id ="ad" required>
  <input type="email" placeholder="E-Posta" name="posta" id ="posta" sifre>
  <input type="password" placeholder="Şifre"  name="sifre" id ="sifre" required>
  <button type='submit'>Üye ol</button>
</form>
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
</body>
</html>
