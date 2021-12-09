<html>
<form method="POST" action="">
    <select name="betræk" class='dropdown-menu'onchange="this.form.submit()">
        <option value="" disabled selected>Betræk</option>
        <option value="tekstil">Tekstil</option>
        <option value="læder">Læder</option>
    </select>
</form>
<?php
   if(isset($_POST["betræk"])){
       $betræk=$_POST["betræk"];
       echo "Valgt betræk => ".$betræk;
   }
?>
<form method="POST" action="">
    <select name="stel" onchange="this.form.submit()">
        <option value="" disabled selected>Stel</option>
        <option value="natur">Natur</option>
        <option value="bejdset">Bejdset</option>
    </select>
</form>
<?php
   if(isset($_POST["stel"])){
       $stel=$_POST["stel"];
       echo "Valgt stel => ".$stel;
   }
?>
</body>
</html>