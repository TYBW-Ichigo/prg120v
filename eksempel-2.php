<?php /* Eksempel 1 */
/*
/* Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/* Programmet skriver ut tallene, summen og differansen
*/
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$sum=$tall1 + $tall2;
$differanse=$tall1 - $tall2;

print ("Det første tallet du skrev inn var: $tall1") <br />; 
print ("Det andre tallet du skrev inn var: $tall2") <br />; 
print ("Summen av tallene du tastet inn er: $sum") <br />; 
print ("Differansen av tallene du tastet inn er: $differanse") <br />; 

?>
