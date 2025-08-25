<?php /* Eksempel 1 */
/*
/* Programmet mottar 2 navn fra et HTML-skjema ved POST-metoden
/* Programmet skriver ut navnene 
*/
$fornavn=$_POST ["fornavn"];
$etternavn=$_POST ["etternavn"];

print ("Navnet du har skrevet inn er $fornavn, $etternavn");

?>
