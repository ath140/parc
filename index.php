<?php
 include_once('phpfiles/connection.php');
 session_start();
 if(isset($_POST['click_btn']))
 {
    $email=$_POST['email_txt'];
    $key=$_POST['passe'];

    $donnee = $conne->prepare("select* from access where Email_user='$email' AND Password_user='$key'");
    $donnee->execute();

    $row=$donnee->fetch(PDO::FETCH_ASSOC);

    if($row['Email_user']==$email && $row['Password_user']==$key)
    {
       header('refresh:1; phpfiles/user.php');
    }
 }else{
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="stylesheet" href="/css/index.css"/>
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="form-title">
            <h3>Connection</h3>
        </div>
        <form class="form-body" action="#" method="POST">
            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email_txt">
            </div>
            <div class="input-group">
                <i class="fa fa-key"></i>
                <input type="text" name="passe">
            </div>
            <button type="submit" name="click_btn">connecter</button>
        </form>
    </div>
</body>
</html>