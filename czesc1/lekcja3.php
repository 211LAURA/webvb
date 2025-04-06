<?php
     echo "<h1>Lekcja 3 (Podatek)</h1>";

        echo "</br>";
        //skrocik do zapytania
        $sql="SELECT DISTINCT rate FROM `pr_tax` ORDER BY rate Desc"; 

        //lista1=zapytaj(kogo,o co)	
        $lista3=mysqli_query($connect,$sql);
        echo "<form action='index.php' method='post'>";
        echo "<select>";

        while($data = mysqli_fetch_assoc($lista3)){
         $dane= $data["rate"];
         echo "<option>$dane</option>";
        }
        echo "</select></br>";
        
    ?>