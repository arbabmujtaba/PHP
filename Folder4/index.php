
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
            $age = 34;
            if($age == 34){
                echo "you a grown ass man";
            }
            else{
                echo "Stay Home ";
            }
            $Parray = array("Lucky","Mubasher","Waqas");
            echo "<br>";
            echo $Parray[1];
            // loops In PHP
            $vall = 2;
            // while($vall <= 100){
            //     echo "This is a simple Loop";
            //     $vall++;  
            // }
            echo "<br>";
            do{
                echo "This is a simple Loop";
                $vall++;      
            }
            while($vall < 10);
            echo "<br>";
            echo $Parray[2];
            for ($vall = 0; $vall < 50; $vall++) {
                echo "welcome my nigga";
                echo "text";
            }
            ?>
        </div>
</body>
</html>