<?php 
    $conn=mysqli_connect("localhost","ABBAOUI","nachoua123","nachoua-php");
    $email="nachouaabbaoui@gmail.com";
    $pass="nachoua123";

?>
<html>

<head>
    <title></title>
    <style>
        body {
            background-image: url(pictures/lum.jpg);
            background-size: cover;
            background-position: center;
            /*  background-color: rgba(0, 0, 0, 0.5);
            width: 800px;
            margin: auto;
            */
        }
        
        h1 {
            text-align: center;
            background-color: #e1911985;
            color: white;
            text-transform: captalize;
            border-radius: 25px 25px 0px 0px;
        }
        
        form {
            /*padding: 30px 30px 30px 30px;*/
            width: 400px;
            height: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: #ffc0cb6b;
            border-radius: 25px;
            box-shadow: 6px 6px 6px 6px #e1911985;
        }
        
        .login {
            /* padding: 45px 0 45px 30p;
            */
            padding: 45px;
        }
        
        .user {
            border-radius: 10px;
            background-color: #e1911985;
            margin-left: 120px;
            height: 33px;
            width: 230px;
            color: white;
        }
        
        .password {
            border-radius: 10px;
            background-color: #e1911985;
            margin-left: 120px;
            height: 33px;
            width: 230px;
            color: white;
        }
        
        .button {
            background-color: #e1911985;
            display: block;
            margin: auto;
            margin-top: 70px;
            text-align: center;
            border-radius: 12px;
            border: 2px solid white;
            padding: 14px 110px;
            outline: none;
            color: white;
            cursor: pointer;
            transition: 0.25px;
        }
        
        .button:hover {
            background-color: #fb4d6b6b;
        }
        
        .label1 {
            color: white;
            font-family: italic;
            font-size: 22px;
            margin-top: 40px;
            padding: 10px 0px 10px 0px;
        }
        
        .label2 {
            color: white;
            font-family: italic;
            font-size: 22px;
            margin-top: 70px;
            padding: 10px 0px 10px 0px;
        }
        
        .flex1 {
            display: block;
        }
        
        .flex2 {
            display: block;
        }
    </style>
</head>

<body>
    <form action="form.php" method="POST">
        <h1>Hello Nachoua</h1>
        <div class="login">
            <div class="flex1">
                <label class="label1">Username</label>
                <input class="user" type="email" name="email" placeholder="Username">
            </div>
            <div class="flex2">
                <label class="label2">Password</label>
                <input class="password" type="password" name="pass" placeholder="**********">
            </div>
            <div>
                <input class="button" type="submit" name="submit" value="Send">

            </div>
    </form>
    <?php if($_SERVER['REQUEST_METHOD'] === 'POST')  { ?>
        <?php if($_POST["email"] == $email && $_POST["pass"] ==$pass)
                {
                    header('Location:index.php');
                }
            else
                {
                echo 'try to give the correct email & password';
            }
        
            ?>
            <?php }?>

</body>

</html>