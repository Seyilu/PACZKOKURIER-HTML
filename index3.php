
<!DOCTYPE HTML> 
<html lang='pl'> 
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
	<title>Start - Paczkokurier </title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
<div class="header">
       <div class="headerstyle">
        <img src="Social-Networks-Instagram-icon.png" alt="ikonka instagram" id="insta"><img src="facebook-icon.png" alt="ikonka fb" id="fb">MASZ PYTANIA? ZADZWOŃ | UK +44 12 223 234 | PL +48 535 35 1043 | Pon-Pt 07:00-18:30, Sob 07:00-14:00
        </div>
</div>
       <div class="photo">
         <img src="logofirmy.png" alt="">
            </div>
       <div class="center">
     <button type="button" class="button" id="button1"> Start </button>
     <button type="button" class="button" id="button2"> Cennik </button>
     <button type="button" class="button" id="button3"> Zamów kuriera </button>
     <button type="button" class="button" id="button4"> Paczki  </button>
     <button type="button" class="button" id="button5"> Kontakt </button>
     </div> 
<div class="kurs">
<div class="kursimage">
    <img src="kurier.png" width="100" id="kurier" alt="">
</div>
<div class="kurstxt">
<br>
<h2>Najlbliższy kurs do PL 25/03/2022
<br>
kolekcja paczek z Polski: od 20/03/2022 do 22/03/2022</h2>
</div>
</div>
<div class="iteamheadh3">
<div class="formularz">
    <div class="formularzcenter">
        <h3>Adres Nadania</h3>
    <form action="wynik.php" method="GET" enctype="multipart/form-data">
  Imię: <br><input type=text class="formularzkontaktowy3" name="imie"/><br/>

  Nazwisko:<br> <input type=text class="formularzkontaktowy3" name="nazwisko"/><br/>
  Kraj:<br/>
  <select type=text class="formularzkontaktowy3" name="kraj">
   <option label="Polska" name="kraj" value="polska">Polska
   <option label="Niemcy" name="kraj" value="niemcy">Niemcy
   <option label="Anglia" name="kraj" value="anglia">Anglia
</select><br><br/>
 <textarea type=text  class="formularzkontaktowy3" name="opis"></textarea><br/><br/>
  Proszę o fakturę do zamówienia: <input type=checkbox  name="faktura"/><br/><br/>
  Chcę zamówić:<br/>
  <input type=radio name=zamow value="DHL"/>DHL<br>
  <input type=radio name=zamow value="DPD"/>DPD<br>
  <input type=radio name=zamow value="DHD"/>DHD<br><br>
  <input type=submit class="button" value="Wyślij"/>
     </form>
    </div>
</div>
</div>

<div class="footer">
<br>
Paczki w UK zbieramy na trasie: <br>
Londyn– Watford- St Albans–Hemel <br>
 Hempstead–Bedford–Luton–Dunstable <br> Hitchin–Stevenage–Milton Keynes,<br> Obsługujemy również cała Polskę<br><br>
 © 2022 Wszelkie prawa zastrzeżone | Zaprojektowane przez Marcina Mokrzyckiego.
</div>
<script>
   document.getElementById("button1").onclick = function () {
    location.href = "index.html";
    };
    document.getElementById("fb").onclick = function () {
    location.href = "https://www.facebook.com/marcin.mokrzycki.545";
    };
    document.getElementById("insta").onclick = function () {
    location.href = "https://www.instagram.com/maaarcin_7/";
    };
  document.getElementById("button2").onclick = function () {
        location.href = "index2.html";
    };
     document.getElementById("button3").onclick = function () {
        location.href = "index3.php";
    };
     document.getElementById("button4").onclick = function () {
        location.href = "index4.php";
    };
     document.getElementById("button5").onclick = function () {
        location.href = "index5.html";
    };
    document.getElementById("kurier").onclick = function () {
        location.href = "index3.html";
    };
    </script>
    </div>
</body>
</html>
