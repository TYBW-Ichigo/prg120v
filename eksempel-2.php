<?php /* Eksempel 1 */
/*
/* Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/* Programmet skriver ut tallene, summen og differansen
*/
$fornavn=$_POST ["fornavn"];
$etternavn=$_POST ["etternavn"];

print ("Navnet du har skrevet inn er $fornavn, $etternavn");

?>
