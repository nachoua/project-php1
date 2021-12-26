
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-php.css">
    <link rel="stylesheet" href="test-js-css.css">

    <title>PHP</title>
</head>

<body>
    <!-- start menu javascript-->
    <a class="menu-btn" href="#">Menu </a>


    <div class="all">
        <div class="menu">
            <img class="img11" src="pictures/x.png">
            <ul>
                <li><a href="test_page.php">test page</a></li>
                <!-- <li><a href="detail.php">detail page</a></li> -->
                <!-- <li><a href="test-java.php">test-java page</a></li> -->
                <li><a href="page_readmore.php">show page</a></li>
              
            </ul>
        </div>
    </div>

 
    <!-- end menu javascript-->


    <?php


    $conn = mysqli_connect('localhost', 'ABBAOUI', 'nachoua123', 'nachoua-php');
   

    if (!$conn) {
        echo 'connection has error' . mysqli_connect();
    } else {
        echo '<h1> DataBase connect </h1>';
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $first_name = $conn->real_escape_string($_POST['first_name']);
        $last_name = $conn->real_escape_string($_POST['last_name']);
        $age = $conn->real_escape_string($_POST['age']);
        $image = $conn->real_escape_string($_POST['image']);
        $adresse_email = $conn->real_escape_string($_POST['adresse_email']);
        $phone_number = $conn->real_escape_string($_POST['phone_number']);
        $names_exp = $conn->real_escape_string($_POST['names_exp']);
         //or  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    }

   

    ?>


    <div>
        <form class="width-form" action="index.php" method="POST">

            first_name: <input type="text" name="first_name" value="">
            last_name: <input type="text" name="last_name" value="">
            age: <input type="text" name="age" value="">
            image: <input type="file" name="image" value=""><br/>
            email: <input type="email" name="adresse_email" value="">
            phone_number: <input type="text" name="phone_number" value="">


            names_exp: <input type="text" name="names_exp" value="">
            <input class="btn-form" type="submit" name="submit" value="Save">

        </form>


        <?php
        // if ($_POST['first_name'] != NULL && $_POST['last_name'] != NULL && $_POST['age'] != NULL && $_POST['image'] != NULL && $_POST['adresse_email'] != NULL && $_POST['phone_number'] != NULL  && $_POST['names_exp'] != NULL) {
        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age']) && isset($_POST['image']) && isset($_POST['adresse_email']) && isset($_POST['phone_number'])   && isset($_POST['names_exp'])) {
        
            $save_sql = "INSERT INTO person(first_name, last_name, age, image, adresse_email, phone_number, names_exp) VALUES('$first_name', '$last_name', '$age', '$image', '$adresse_email', '$phone_number', '$names_exp')";
            header('Location: page_readmore.php');
        } else {
            echo "try to insert";
        }
      
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (mysqli_query($conn, $save_sql)) {
                echo 'uk connect';
            } else {
                echo 'error try ';
            }
        }
        // $conn -> close();
        mysqli_close($conn);

        ?>


    </div>






    <footer>
        <?php include("footer.html") ?>

    </footer>
    <script type="text/javascript" src="javascript-test/js-menu.js"></script>
</body>

</html>