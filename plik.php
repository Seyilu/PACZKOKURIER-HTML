<?php

// wyświetlanie typu pliku
echo $_FILES['nazwa_pliku']['type'];

// wyświetlanie rozmiaru
echo $_FILES['nazwa_pliku']['size'];

// wyświetlanie nazwy pliku
echo $_FILES['nazwa_pliku']['name'];

// wyświetlanie nazwy tymczasowej
echo $_FILES['nazwa_pliku']['tmp_name'];

// wyświetlanie ewentualnych błędów
echo $_FILES['nazwa_pliku']['error'];

?>