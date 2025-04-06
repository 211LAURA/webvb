
<?php
     echo "<h1>Lekcja 1 (Produkty)</h1>";

        echo "</br>";
        //skrocik do zapytania
        $sql="SELECT pr.name FROM pr_category_lang pr ORDER BY pr.name ASC";  

        //lista1=zapytaj(kogo,o co)	
        $lista1=mysqli_query($connect,$sql);
        echo "<form action='index.php' method='post'>";
        echo "<select>";

        while($data = mysqli_fetch_assoc($lista1)){
         $dane= $data["name"];
         echo "<option>$dane</option>";
        }
        echo "</select></br>";
        echo "<button>Start</button>";
        echo "</form>";
    ?>