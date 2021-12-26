
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
<?php $con=mysqli_connect('localhost', 'ABBAOUI', 'nachoua123', 'nachoua-php');
    if($con)
    {
        echo 'data base connect succefully';
    }
    else
    {
        echo 'try to solve problem of the connection';
    }
    $id=$con->real_escape_string($_GET['id']);
   
    $data_auth="select * from person where id='$id'";
    
     $get_data=mysqli_query($con, $data_auth); 
     $fetch=mysqli_fetch_assoc($get_data);
    //  echo($fetch['first_name']);
 

   if(isset($_REQUEST['update']))
   {
    $id=$con->real_escape_string($_REQUEST['id']);

       $id=$con->real_escape_string($_REQUEST['id']);
        $first_name=$con->real_escape_string($_REQUEST['first_name']);
        $last_name=$con->real_escape_string($_REQUEST['last_name']);
        $age=$con->real_escape_string($_REQUEST['age']);
        $image=$con->real_escape_string($_REQUEST['image']);
        $adresse_email=$con->real_escape_string($_REQUEST['adresse_email']);
        $phone_number=$con->real_escape_string($_REQUEST['phone_number']);
        $date=$con->real_escape_string($_REQUEST['date']);
        $names_exp=$con->real_escape_string($_REQUEST['names_exp']);
        $update_data1="UPDATE person SET first_name='$first_name', last_name='$last_name', age='$age', image='$image', adresse_email='$adresse_email', phone_number='$phone_number', date='$date', names_exp='$names_exp'  where id='$id' ";
     if($run=mysqli_query($con, $update_data1))
     {
        //  echo 'success update ';
        // echo'<script>alert("successful update");</script>';
         header('Location: page_readmore.php');
     }
     else{
         echo 'try solve operation update';
        
     }
    }

    ?>
  

    <div>
      

        <form class="width-form" action="edit.php" method="REQUEST">

                id: <input type="text" name="id" value="<?php echo $fetch['id']; ?>">
                first_name: <input type="text" name="first_name" value=" <?php echo $fetch['first_name']; ?>">
                last_name: <input type="text" name="last_name" value=" <?php echo $fetch['last_name']; ?>">
                age: <input type="text" name="age" value=" <?php echo $fetch['age']; ?>">
                image: <input type="file" name="image" value="">
                email: <input type="email" name="adresse_email" value=" <?php echo $fetch['adresse_email']; ?>">
                phone_number: <input type="text" name="phone_number" value=" <?php echo $fetch['phone_number']; ?>">
                date: <input type="date" name="date" value="<?php echo $fetch['date']; ?>">
                names_exp: <input type="text" name="names_exp" value="<?php echo $fetch['names_exp']; ?>">


                <input class="btn-form" type="submit" name="update" value="update">

            </form>
     


    </div>

    <footer>
        <?php include("footer.html") ?>

    </footer>
</body>
</html>