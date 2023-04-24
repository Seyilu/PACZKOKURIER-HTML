<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


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

<div class="formularzcenter">
  <br>
   <div class="center">
    <h1>
  
   <button type="button" class="button" id="button7"> Rejestracja </button>
   <h1 class="my-5">Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witaj na naszej stronie.</h1>
    <p>
        <button type="button" class="button" id="button8">Zresetuj swoje hasło</button>
        <button type="button" class="button" id="button9">Wyloguj się </button>
         <form method="post">
       <input type="submit" class="button" name="dodaj" value="Dodaj Paczkę">
   </form>
   
   <h1>
   Lista Paczek
   </h1>
       </h1>
       
<center>
 
  <head>
          
           <TABLE WIDTH=50% BORDER=5 CELLPADDING=5>
            <tr>
                <th>ID</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>NrPaczki</th>
                <th>Akcja</th>
            </tr>
      </TABLE>
        </head>
        
        	<?php
			
			$conn = new mysqli("localhost", "root", "", "paczki") or die("Błšd");
            
			
			$result = $conn->query("SELECT * FROM users");
			
			
			if($result->num_rows > 0){
                
				
			}else {
				echo "Nie ma nic w bazie danych";
            }
    ?>	
    <?php
    if(isset($_POST['dodaj'])) 
{
$sql = "INSERT INTO `users` (`id`, `IMIE`, `Nazwisko`, `NrPaczki`) VALUES (NULL, 'Ala', 'Wojtanek', '1241235')";

if ($result2 = $conn->query($sql))
{
    echo "Dodano nowy rekord";
}
    else echo "blad";
}
	?>	
     <?php

        if($result->num_rows>0){
                while($row = $result->fetch_assoc()){       
?>
           
            <TABLE WIDTH=50% BORDER=5 CELLPADDING=5>
            <tr>
                <td><?php echo $row['id'];
                    ?></td>
                      <td><?php echo $row['IMIE'];
                    ?></td>
                      <td><?php echo $row['Nazwisko'];
                    ?></td>
                      <td><?php echo $row['NrPaczki'];
                    ?></td>
                <td><a class="buttonx"  value="Usun" href="delete.php?id=<?php echo $row['id'];?>">
                        Usuń</a></td>
            </tr>
    </TABLE>
            <?php }
        }
        ?>
        

       </center>
</div>
<div class="footer">
 <div class="footerright">
© 2022 Wszelkie prawa zastrzeżone | Zaprojektowane przez Marcina Mokrzyckiego.
 </div>
<br>
Paczki w UK zbieramy na trasie: <br>
Londyn– Watford- St Albans–Hemel <br>
 Hempstead–Bedford–Luton–Dunstable <br> Hitchin–Stevenage–Milton Keynes,<br> Obsługujemy również cała Polskę
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
    document.getElementById("button7").onclick = function () {
        location.href = "register.php";
    };
     document.getElementById("button8").onclick = function () {
        location.href = "reset-password.php";
    };
     document.getElementById("button9").onclick = function () {
        location.href = "logout.php";
    };
    
    </script>
    </div>
    </div>
</body>
</html>