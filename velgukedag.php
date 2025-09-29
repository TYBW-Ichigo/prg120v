<?php
?>

<h3> Velg en ukedag </h3>
 <form method="post" action="velgukedag" id="velgukedag" name"velgukedag">
   Ukedag 
   <select name="ukedag" id="ukedag" >
    <option value="mandag">mandag</option>
    <option value="tirsdag">tirsdag</option>
    <option value="onsdag" selected>onsdag</option>
    <option value="torsdag">torsdag</option>
    <option value="fredag">fredag</option>
  </select>  <br />
  <input type="submit" value="Velg ukedag" id="velgukedagknapp" name="velgukedagknapp" /> 
</form>

<?php

 if (isset($_POST ["velgukedagknapp"]))
    {
      $ukedag=$_POST ["ukedag"];
      print ("Du har valgt dagen: $ukedag <br />");
    }

?>
