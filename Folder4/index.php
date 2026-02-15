
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
            height: 120px;
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

            ?>
        </div>
</body>
</html>