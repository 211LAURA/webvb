<?php
     echo "<p>Ilość produktów dostepnych</p>";

     
        //skrocik do zapytania
        $sql="SELECT COUNT(*) as 'ile' FROM `pr_product` WHERE active = 1;";  

        //lista1=zapytaj(kogo,o co)	
        $prod_available=mysqli_query($connect,$sql);
    
        while($data = mysqli_fetch_assoc($prod_available)){
         $dane= $data["ile"];
         echo "<h2>$dane</h2>";
        }
        
    ?>