<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="jfproject";

$conn =new mysqli($host,$user,$password,$db);

mysqli_select_db($conn,$db);

if (isset($_POST["submit"]))
{

   
        
        $uname = $_POST['username'];
        $password=$_POST['password'];

        $sql = "select * from login where user_name='".$uname."' AND user_password='".$password."' limit 1";

      


       $result= mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1)
        {
           /* echo "You have successfully LoggedIn";*/
            $_SESSION["un"] = $_POST["username"];
            header("location:backhome.php");
            

        }else{
         

      echo '<script>alert("Your Inputs wrong!!! Please try again")</script>';
       // header("location:backlogin.php");
          //  exit();
       
   
    
        }

    }





?>











<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel = "icon" type = "images/jpg" href = "images/logo.jpg" >
    <link rel="stylesheet" href="assets/css/xx.css">
</head>
<body>
  	<!-- ***** Preloader Start ***** -->
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->


<div class="header">
  <h1>Welcome to<br><em>Jayasinghe Furnitures</em> </h1>
  
</div>
    


<form  method="post">

  <div class="imgcontainer">
    <img src="images/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
   
    <input type="text" placeholder="Enter Username" name="username" required><br>

   
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <input type="submit" name="submit" id="button" value="LOGIN" />  

    <!--<button type="submit">Login</button>-->  
    
    
  </div>

</form>


 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>





</body>

<style>

/* Header/Logo Title */
.header {
  padding: 5px;
  text-align: center;
    margin-top: -20px;
  color: white;
  font-size: 30px;
  height: 80px;
 /* background-image: url("images/Background/bk11.jpg")  background: #ccc;*/
}

/* Page Content */







body {
	background-image: url("images/Background/bk6.jpg")
	}    
body {font-family: Arial, Helvetica, sans-serif;position: fixed;}
/*form {border: 3px solid #f1f1f1;}*/

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin-top: 8px;
  margin-left: 25%;
  text-align: center;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

#button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin-top: 10px ;
  margin-left: 25%;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 100px 0 12px 0px;
 
}

img.avatar {
  width: 22.5%;
  border-radius: 50%;
  height: 45%;

}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</html>