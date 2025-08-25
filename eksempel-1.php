<?php /* Eksempel 1 */
/*
/* Programmet mottar 2 navn fra et HTML-skjema ved POST-metoden
/* Programmet skriver ut navnene 
*/
$navn1=$_POST ["navn1"];
$navn2=$_POST ["navn2"];

print ("Navnet du har skrevet inn er $navn1, $navn2");
