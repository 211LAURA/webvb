<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazy danych</title>
    <link rel="stylesheet" href="styl2.css">
<style>
       body{
        margin: 50px;
       } 
       .row1{
        display: flex;
        gap: 20px;
       }

       .row2{
        display: flex;
        gap: 20px;
       }

       div.baner{
        display: flex;
        text-align: center;
       }

        .lista1{
        height:450px;
        width:33%;
        }  

        .lista2{
        height:450px;
        width:33%;
        }  

        .lista3{
        height:450px;
        width:33%;
        }  

        .lista4, .lista5, .lista6 {
        height:550px;
        width:33%;
        gap: 10px;
        
        }  
    
        .lista1, .lista2, .lista3, .lista4, .lista5, .lista6 {
            border:1px solid #008080;

        }

        .kody{
        display: flex;
        gap: 20px;
        }

        .kod1{
        height:450px;
        width:33%;
        
        }

        td { border: 1px solid black; }

    </style>   

</head>

<body>

<div class="baner">
    </br>
    <h1>Bazy danych 19.03.25</h1>
    </br>
    <?php
    include 'connect.php';
    include 'count_prodt.php';
    include 'count_prodt_a.php';
    include 'count_category.php';
    ?>
    
</div>

 
<div class="row1">
    <div class="lista1">
        <?php
    //include 'connect.php';
    include 'lekcja1.php';
    ?>
    </div>

    <div class="lista2">
    <?php
    //include 'connect.php';
    include 'lekcja2.php';
    ?>
    </div>

    <div class="lista3">
    <?php
    //include 'connect.php';
    include 'lekcja3.php';
    ?>
    </div>
</div>
<div class="row2">

    <div class="lista4">
    <?php
    //include 'connect.php';
    include 'lekcja4.php';
    ?>
    </div>

    <div class="lista5">
    <?php
    //include 'connect.php';
    include 'lekcja5.php';
    ?>
    </div>

    <div class="lista6">
    <?php
    //include 'connect.php';
    include 'lekcja6.php';

    mysqli_close($connect);
    ?>
    </div>

</div>
</body>

</html>