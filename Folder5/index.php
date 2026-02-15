
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            background-color: rgb(55, 135, 121);
            color: white;
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
        <div class="container">
            <h1>This is a container</h1>
            <?php
            function print5(){
                echo "five ";
            }
            print5();
            //Printing a simple number using functions
            function printnum($numberr){
                echo $numberr;
            }
            printnum(20);
            $str = "This is a string";
            $tren = strlen($str);
            $mrenn = " This and the length".$tren.$rev;
            echo $mrenn;
            $rev = strrev($str);
            $mystring = "This is my name";
            $reversed = "The reversed String is ".strrev($mystring)."<br>";
            $position = "The Positon of my  String is ".strpos($mystring, "my")."<br>";
            $replacedd = "The replaced pos String is ".str_replace("my", "now",8)."<br>";
            echo "<br>";
            echo $position;
            echo $reversed;
            echo $replacedd;
            ?>
        </div>
</body>
</html>