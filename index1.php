<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
   <title>Document</title>
</head>

<body>
   <header>
      <ul class="header__menu">
         <li><a href="#"><img src="images/logo.png" class="logo" width="50px" height="50px"></a></li>
         <li><a href="#">Главная</a></li>
         <li><a href="#">Информация</a></li>
         <li><a href="#">О нас</a></li>
         <li><a href="#">Контакты</a></li>

      </ul>
   </header>
   <main>
<?php

     $max = -10000;
     $min = 10000;

     $x = 10;
     $overoll = 10;
     $step = 1;
     $type = "D";
        
     if ($type == "C")
         echo '<ol>';
     else 
     if($type == "B")
         echo'<ul>';
     else
     if($type == "D")
         echo '<table>';

     $infinite = 0; 
     $f = 0;
     $list = 0;

     while ($infinite < $overoll ) {
         
         if ($x <=10){
             $f = 10 * $x - 5;
         }

         else if ($x >10 and $x <20){
              $f = ($x + 3) * $x ** 2;
         }

         else if($x >=20) {

             if($x = 25){
                 $f = 'error';
             } else {
                 $f = 3 / ($x - 25) + 2;
             }
             
         }
               
         $list = $list + 1;


         if ($type == 'A') 
         {
             echo 'f('.$x.')='.round($f);
             if ($i < $overoll-1)
                 echo '<br>';
         }
         else
         if($type == 'B')
         {
             echo '<li>f('.$x.')='.round($f).'</li>';
         }
         if($type == 'C')
         {
             echo '<li>f('.$x.')='.round($f).'</li>';
         }
         if($type == 'D')
         {
             echo '<tr>'.'<td>'.$list.'</td>'.'<td>f('.$x.')</td><td>'.round($f).'</td></tr><tr></tr> <br>';
         }
         if($type == 'E')
         {
             echo '<div class="box">f('.$x.')='.round($f).'</div>';
         }    

         $infinite++;
         $x+=$step;
         if($f >= $max){
             $max = $f;
         }
         
         if($f <= $min){
             $min = $f;
         }
     }
     
     if ($type == 'C')
         echo '</ol>';
     else 
     if($type == 'B')
         echo '</ul>';
     else 
     if ($type == 'D')
         echo '</table>';

     if($max == "-0") 
         $max = "0";
     if($f == "0") 
         $max = "0";
     
     $x -=1;
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo 'Значение максимума: ' .round($max). "<br>";
     echo 'Значение минимума: ' .round($min). "<br>";
     echo 'Аргумента: '.$x."<br>";
     echo 'Всего значений: '.$overoll;

        ?>

   </main>

   <footer>
      <div class="footer__container">
            <?php  
                echo 'Тип Верстки:'.$type
            ?>
      </div>
   </footer>
</body>

</html>