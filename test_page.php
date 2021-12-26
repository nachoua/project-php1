<?php
$conn = mysqli_connect('localhost', 'ABBAOUI', 'nachoua123', 'nachoua-php');
$sql = "select * from person";
$result = mysqli_query($conn, $sql); //make query get the result
$persons = mysqli_fetch_all($result, MYSQLI_ASSOC); //for get resulting rows as an array
/*print_r($persons);  //just for showing the array
   mysqli_free_result($result); //free result from memory
   mysqli_close($conn);*/

$full_name = "nachoua abbaoui";
$name = "";
$age = 23;
$numbers = [1, 2, 3, 4, 5];


$information = [
    ["firstname" => "abbaoui", "lastname" => "sabrina", "day_birthday" => 15, "month" => 06, "years" => 2006],
    ["firstname" => "abbaoui", "lastname" => "anass", "day_birthday" => 16, "month" => 01, "years" => 1996],
    ["firstname" => "abbaoui", "lastname" => "nachoua", "day_birthday" => 29, "month" => 12, "years" => 1998]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-php.css">
    <title>PHP</title>
</head>

<body>


    <?php
    if (!$conn) {
        echo 'connection has error' . mysqli_connect();
    } else {
        echo '<h1> DataBase connect </h1>';
    }

    ?>

      
   
<div class="grey-r">
   

            <form action="show.php" method="POST">
                <input type="text" name="namee" value="try write something">
                <input type="submit">
            </form>
          <?php  if($_SERVER['REQUEST_METHOD'] === 'POST')  { ?>

            <h1> <?php echo $_POST["namee"]; ?></h1>
   <?php } ?>  
            

    <?php foreach ($persons as $person) :  ?>

        <h1 class="fore"> <?php echo $person["names_exp"] . "<br />" . $person["age"] . "<br />" . $person["first_name"] . "<br />" . $person["date"]; ?></h1>

    <?php endforeach; ?>

    <ul>
        <?php foreach (explode(', ', $person["names_exp"]) as $exp) { ?>
            <li>
                <?php echo $exp; ?>
            </li>
        <?php } ?>
    </ul>


    <div> <?php if (count($persons) == 1) : ?>
            <p>true this is one person </p>
        <?php else : ?>
            <p>false this is more than one person </p>
        <?php endif; ?>
    </div>


    <div class="test-php">
        <h1><?php echo 'hello nachoua this is php !!'; ?></h1>
    </div>
    <div><?php echo "hi my name's is :" . $full_name; ?></div>
    <div><?php echo "my age is :" . $age . "years old"; ?> </div>

    <div>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo $numbers[$i] . '<br />';
        }
        ?>
    </div>


    <div>
        <?php foreach ($information as $info) {
            if ($info["day_birthday"] == 29) {
                echo "this is the person has the day birdthay 29 :" . $info["firstname"] . "<br />" . $info["lastname"] . "<br />";
            }
        }
        ?>
        <?php
        for ($i = 0; $i < count($information); $i++) {
            echo $information[$i]["firstname"] . '<br />' . $information[$i]["lastname"] . '<br />' . $information[$i]["day_birthday"] . "/" . $information[$i]["month"] . "/" . $information[$i]["years"] . '<br />';
            if ($information[$i]["years"] == 2006) {
                echo "this is the small one : ";
            } elseif ($information[$i]["years"] == 1998) {
                echo "this is the middle one ,me : ";
            } elseif ($information[$i]["years"] == 1996) {
                echo "this is the old one : ";
            }
        }
        ?>
       
     
    </div>
    </div>


    <footer>
        <?php include("footer.html") ?>

    </footer>
</body>

</html>