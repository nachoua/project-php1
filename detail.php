<?php
  $conn = mysqli_connect('localhost', 'ABBAOUI', 'nachoua123', 'nachoua-php');
  if(isset($_POST['delete']))
  {
     $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
      $sqll = "DELETE FROM person WHERE id = $id_to_delete";
      if(mysqli_query($conn, $sqll))
      {
         header('Location: index.php');
      }
      else{
          echo 'error to delete';
      }
  }
  //
  if(isset($_GET['id']))
   {
   
       $id=mysqli_real_escape_string($conn, $_GET['id']);
       $sql = "SELECT * FROM person where id = $id";
       $result=mysqli_query($conn, $sql);
       $person=mysqli_fetch_assoc($result);
       mysqli_free_result($result);
       /*  mysqli_close($conn);*/
   }
  


    // $conn->close();

  
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css-php.css" rel="stylesheet">
    </head>
    <body>
     <h1>have a nice day <h1>
    <div class="grey-r">
        <?php if($person){ ?>
            
            <img class="img-thumbnail" src="pictures/<?php echo $person['image']; ?>">
            
            
            <p><?php echo $person['first_name']; ?></p>
            <p><?php echo $person['last_name']; ?></p>
            <p><?php echo $person['age']; ?></p>
             <p><?php echo $person['adresse_email']; ?></p>
            <p><?php echo $person['date']; ?></p>
        <?php } ?>
        
    <div>
        <form action='detail.php' method='POST'>
            <input type="hidden" name="id_to_delete" value="<?php echo $person['id']; ?>">
            <input class="btn-form" type="submit" name="delete" value="delete">
            
         </form>
       
         <form action="edit.php" method="GET">
  <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
      
  <a href="edit.php"><input class="btn-form" type="submit" name="submit" value="edit"></a>
    </form>
         </div>
             
    </div>
     <footer> 
    <?php include("footer.html") ?>
    
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    </body>
</html>