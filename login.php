
<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
    header("location:admin_info.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $myusername= $_POST['name'];

    $mypassword= $_POST['password'];
   
    $password= md5($mypassword);
    
    $sql="SELECT a_id FROM admin WHERE a_name='$myusername'  and  a_pass='$password'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    $count=mysqli_num_rows($result);

    if($count==1)
    {
        $_SESSION["login_user"]=$myusername;
        header("location:admin_info.php");

    }
    else
    {
        echo"your login name or password is inavlid";
    }
    

}
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="loginstyle.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="" method = "POST">
            <div class="field">
               <input type="text" name = "name" required>
               <label>Name</label>
            </div>
            <div class="field">
               <input type="password" name = "password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
              <!-- <a href="login1.php"> Login </a> -->
              <input type="submit"  value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>
