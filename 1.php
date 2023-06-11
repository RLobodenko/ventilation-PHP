<!doctype html>
<html lang="ru">
<head><meta charset="utf-8">
    <title></title>
    <link href="1.css" rel="stylesheet" type="text/css" />
 
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&amp;display=swap" rel="stylesheet" />
    <style type="text/css">
    </style>
</head>
<body>
    <div class="three">
    <button><a href="index.php">Сечение</a></button>
    <button><a href="1.php">Расход</a></button>
    <button><a href="3.php">Кратность</a></button>
    
    <hr>
                

<p>Расход воздуха для круглого сечения:</p>

<form method="GET">
    <p>Введите среднюю скорость(м/с):</p>
   <input type="number" name="name" /></p>
   <p>Введите диаметр(мм):</p>
   <input type="number" name="age" /></p>
    <input type="submit" value="Получить">
        
</form>

<p>L : </p>
<?php
$name;
$age;




if(isset($_GET["name"])){
  
    $name = $_GET["name"];
}
if(isset($_GET["age"])){
  
    $age = $_GET["age"];
}
echo 3600 * $name * 3.14 * $age * $age / 4000000;
?>

<hr />
<p>Расход воздуха для прямоугольного сечения:</p>


<form method="GET">
    <p>Введите среднюю скорость(м/с):</p>
   <input type="number" name="name2" /></p>
<p>Введите длину(мм):</p>
   <input type="number" name="age2" /></p>

<p>Введите ширину(мм):</p>
   <input type="number" name="age1" /></p>
    <input type="submit" value="Получить">
        
</form>

<p>L : </p>
<?php
$name2;
$age2;
    $age1;



if(isset($_GET["name2"])){
  
    $name2 = $_GET["name2"];
}
if(isset($_GET["age2"])){
  
    $age2 = $_GET["age2"];
}
    
    if(isset($_GET["age1"])){
      
        $age1 = $_GET["age1"];
    }
echo 3600 * $name2 * $age2 * $age1 / 1000000;
?>



     <hr>
<form method="GET">
<p>L <sub>фактический</sub><span>(м<sup>3</sup>/ч)</span>:</p>
   <input type="number" name="name3" /></p>
<p>L <sub>проектный</sub><span>(м<sup>3</sup>/ч)</span>:</p>
<input type="number" name="age3" /></p>

    <input type="submit" value="Получить">
        
</form>

                     <p>Невязка:</p>
<?php
$name3;
$age3;




if(isset($_GET["name3"])){
  
    $name3 = $_GET["name3"];
}
if(isset($_GET["age3"])){
  
    $age3 = $_GET["age3"];
}
echo ($name3 - $age3)/$age3 * 100;
?>

          
                
   
</div>
</body>
</html>

