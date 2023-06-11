

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" type="text/css"
        href="6.css" />


            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
<style>
              
            </style>

                </head>
                
                <body>

                     

     
            
            <div class="three">
                
<button><a href="index.php">Сечения</a></button>
<button><a href="1.php">Расход</a></button>
<button><a href="3.php">Кратность</a></button>


<hr>
  
            
            <p>Круглое сечение: </p>
          
        
             <br>
                            

<form method="GET">
    
   <p>Введите диаметр(мм):</p>
   <input type="number" name="age" /></p>
    <input type="submit" value="Получить">
        
</form>
             <br> <br>


<?php
$age;

if(isset($_GET["age"])){
  
    $age = $_GET["age"];
}
?>

             <table align="center">



<tr><td>6D<sub>г</sub></td><td>0.054D</td><td>0.12D</td><td>0.28D</td></tr>


             
                 <tr><td><?php echo 6 * $age / 10 . "см" ; ?></td><td><?php echo 0.054 * $age / 10 . "см" ; ?></td><td><?php echo 0.12 * $age / 10 . "см" ; ?></td><td><?php echo 0.28 * $age / 10 . "см" ; ?></td></tr>
                 <tr><td>2D<sub>г</sub></td><td>0.946D</td><td>0.88D</td><td>0.72D</td></tr>
                 <tr><td><?php echo 2 * $age / 10 . "см" ; ?></td><td><?php echo ($age - $age * 0.054) / 10 . "см" ; ?></td><td><?php echo ($age - $age * 0.12) / 10 . "см" ; ?></td><td><?php echo ($age - $age * 0.28) / 10 . "см" ; ?></span></td></tr>
                 </table>
           
                           <hr>
            <p>Прямоугольное сечение:</p>


<form method="GET">
    
<p>Введите длину (a, мм):</p>
   <input type="number" name="age1" /></p>

<p>Введите ширину (b, мм):</p>
<input type="number" name="age2" /></p>
    <input type="submit" value="Получить">
        
</form>
             <br> <br>


<?php
$age1;
   $age2;
if(isset($_GET["age1"])){
  
    $age1 = $_GET["age1"];
}
    
    
    if(isset($_GET["age2"])){
      
        $age2 = $_GET["age2"];
    }
?>


             <br> <br>
             <table align="center">


<tr><td>6D<sub>г</sub></td><td>0.1a</td><td>0.2a</td><td>0.4a</td><td>0.1b</td><td>0.2b</td><td>0.4b</td></tr>




             

             
                 <tr><td> <?php echo 6 * 2 * $age1 * $age2 / ($age1 + $age2) . "см" ; ?></td><td> <?php echo 0.1 * $age1 / 10 . "см" ; ?></td><td><?php echo 0.2 * $age1 / 10 . "см" ; ?></td><td><?php echo 0.4 * $age1 / 10 . "см" ; ?></td><td><?php echo 0.1 * $age2 / 10 . "см" ; ?></span></td><td><?php echo 0.2 * $age2 / 10 . "см" ; ?></td><td><?php echo 0.4 * $age2 / 10 . "см" ; ?></td></tr>
                 <tr><td>2D<sub>г</sub></td><td> </td><td> </td> <td> </td><td>0.9b</td><td>0.8b</td><td>0.6b</td></tr>
                 <tr><td><?php echo 2 * 2 * $age1 * $age2 / ($age1 + $age2) . "см" ; ?> </td><td> </td><td> </td><td></td><td><?php echo 0.9 * $age2 / 10 . "см" ; ?> </td><td><?php echo 0.8 * $age2 / 10 . "см" ; ?></td><td><?php echo 0.6 * $age2 / 10 . "см" ; ?></td></tr>
                 </table>
                 
                             </div>
                </body>
</html>


