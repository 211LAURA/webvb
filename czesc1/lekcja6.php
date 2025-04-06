<?php
     echo "<h1>Lekcja 6 (Rodzaje platnosci)</h1>";

        echo "</br>";
        //skrocik do zapytania
        $sql="SELECT DISTINCT payment FROM `pr_orders`"; 

        //lista1=zapytaj(kogo,o co)	
        $lista6=mysqli_query($connect,$sql);
        echo "<form action='index.php' method='post'>";
        echo "<select>";

        while($data = mysqli_fetch_assoc($lista6)){
         $dane= $data["payment"];
         echo "<option>$dane</option>";
        }
        echo "</select></br>";
        
    ?>