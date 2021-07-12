<?php
require_once('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $user = "INSERT INTO  login (name, password, email, phone) VALUES ('$name', '$password', '$email','$phone')";
    if(mysqli_query($conn,$user)){
      echo "<div>
        <h2>Successfully registered</h2>
        <h3>Name  : $name</h3>
        <h3>password  : $password</h3>
        <h3>email  : $email</h3>
        <h3>phone  : $phone</h3>
      </div>"
    }
    else{
        "not successfull";
    }
}
?>
<!DOCTYPE html>
<head>
</head>
<style>
body{
  background-color:lightgrey;
}
div{
  height: 300px;
  width: 400px;
  border: 1px solid white;
  background-color: white;
  margin:auto;
  margin-top:130px;
  border-radius:10px;
  text-align:center;
}
h2{
  color:green;
}
</style>
<body>
<br>

</body>
</html>
