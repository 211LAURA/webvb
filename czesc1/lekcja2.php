<?php
     echo "<h1>Lekcja 2 (Rodzaje dostawy)</h1>";

        echo "</br>";
        //skrocik do zapytania
        $sql="SELECT pr.name FROM pr_carrier pr ORDER BY pr.name ASC"; 

        //lista1=zapytaj(kogo,o co)	
        $lista2=mysqli_query($connect,$sql);
        
        echo "<select>";

        while($data = mysqli_fetch_assoc($lista2)){
         $dane= $data["name"];
         echo "<option>$dane</option>";
        }
        echo "</select></br>";
        
    ?>