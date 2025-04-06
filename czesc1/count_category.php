<?php
     echo "<p>Ilość kategorii</p>";

       
        //skrocik do zapytania
        $sql="SELECT count(*)  as 'ile' FROM pr_category";  

        //lista1=zapytaj(kogo,o co)	
        $category=mysqli_query($connect,$sql);
        
        while($data = mysqli_fetch_assoc($category)){
            
         $dane= $data["ile"];
         echo "<h2>$dane</h2>";
        }
        
    ?>