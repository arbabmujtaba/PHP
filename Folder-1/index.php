<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container">
        <?php
        echo "This is a simple php Code";
        echo "<br>";
        $var1=12;
        $var2= 13;
        echo "<br>";
        echo $var1 + $var2;
        echo "<br>";
        echo $var1 - $var2;
        echo "<br>";
        echo $var1 * $var2;
        echo "<br>";
        echo $var1 / $var2;
        echo "<br>";
        $varsum = $var1;
        echo "<br>";
        echo $varsum;

         echo "<br>";
         echo "These are some comparison operators";
          echo "<br>";
         echo var_dump(1==2);
          echo "<br>";
          echo var_dump(1!=2);
           echo "<br>";
           echo $var1++;
            echo "<br>";
           echo $var2--;
            echo "<br>";
           echo $var1;
           echo "<br>";
           echo --$var1;
           echo  $var1;
           $myvar1 = (false) and (true);
           echo "<br>";
           echo var_dump($myvar1);
        ?>
    </div>
</body>
</html>