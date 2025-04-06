<?php
       echo "<p>Ilość produktów w sklepie</p>";

     
       //skrocik do zapytania
       $sql="SELECT COUNT(*) as ile FROM pr_product";  

       //lista1=zapytaj(kogo,o co)	
       $product=mysqli_query($connect,$sql);
       
       while($data = mysqli_fetch_assoc($product)){
        $dane= $data["ile"];
        echo "<h2>$dane</h2>";
       }
       
   ?>