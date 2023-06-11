<!doctype html>
<html lang="ru">
<head><meta charset="utf-8">
    <title></title>
    <link href="3.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&amp;display=swap" rel="stylesheet" />
    <style type="text/css">
    </style>
</head>
<body>
    
    
<div class="three">
    <button><a href="index.php">Сечения</a></button>
    <button><a href="1.php">Расход</a></button>
    <button><a href="3.php">Кратность</a></button>
  
  
    <hr>
   
    <form method="GET">
        <p>Введите фактический расход<span>(м<sup>3</sup>/ч)</span>:
       <input type="number" name="name" /></p>
       <p>Введите объем помещения<span>(м<sup>3</sup>)</span>:
       <input type="number" name="age" /></p>
        <input type="submit" value="Получить">
            
    </form>
    
    <p>Фактическая кратность воздухообмена : </p>
<?php
$name;
$age;




if(isset($_GET["name"])){
  
    $name = $_GET["name"];
}
if(isset($_GET["age"])){
  
    $age = $_GET["age"];
}
echo $name / $age;
?>


</div>
</body>
</html>

