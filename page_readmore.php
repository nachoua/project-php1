
   <?php
$conn = mysqli_connect('localhost', 'ABBAOUI', 'nachoua123', 'nachoua-php');
$sql = "select * from person";
$result = mysqli_query($conn, $sql); //make query get the result
$persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css-php.css">
        <title>Document</title>
  </head>
  <body>
 

        <?php foreach ($persons as $person) :  ?>
            <div class="grey-r">
            <h1><?php echo $person['first_name']; ?></h1>
            <img class="img-thumbnail" src="pictures/<?php echo $person['image']; ?>">
            
            <a href="detail.php?id=<?php echo $person['id'] ?>"><input class="btn-primary" type="submit" name="submit" value="READ MORE"></a>
            </div>
     
            <?php endforeach; ?>
            <footer> 
    <?php include("footer.html") ?>
    
</footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

  </body>
  </html>
