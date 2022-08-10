<?php
error_reporting(0);
require("connection.php");
require("OB/cartItem.php");
session_start();



?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Jayasinghe Sawmill & Furnirutes Products</title>
    <link rel = "icon" type = "images/jpg" href = "images/logo.jpg" >

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
  
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/cartstyle.css">

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

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Jayasinghe <em>Sawmill & Furnitures</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                </a>
              </li> 
              <li class="nav-item ">
                <a class="nav-link" href="products.php">Products
                </a>
                
              </li>

              <li class="nav-item active">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

  <form method="POST">
  <?php
    if(isset($_SESSION['cart']))
    {
      $total=0;
    
      $cart=$_SESSION['cart'];
      if(isset($_POST["btnRemove"]))
      {
        $i=$_POST["btnRemove"];
        array_splice($cart,$i,1);
        $_SESSION['cart']=$cart;
      }

      if(isset($_POST["btnUpdate"]))
      {
        $i=$_POST["btnUpdate"];
        $cart[$i]->PQty= $_POST['qty'][$i];
        if($cart[$i]->PQty<=0)
        {
          array_splice($cart,$i,1);

        }
        $_SESSION['cart']=$cart;
      }

      if(sizeof($cart)>0)
      {

       echo '<div class="row">';
       echo ' <div class="dimDowr"></div>';
       echo ' </div>';
         
       echo '<div class="carttable">';

     
      // echo '       <th>Product Code</th>';
      echo '  <table >';
      echo '   <tr>';
       echo '       <th>Product Name</th>';
       echo '       <th>Unit Price (LKR)</th>';
       echo '        <th>Quantity</th>';
       echo '        <th>Cost (LKR)</th>';
       echo '         <th>Update</th>';
       echo '         <th>Remove</th>';
       echo '     </tr>';

       
       $r=0;
       
       foreach($cart as $i)
       {
         $item = new CartItem();
         $item = $i;
         $cost=$item->PQty * $item->PPrice;
         $total=$total+$cost;
       if($cost>0)
        {
         echo '<tr>
            
            <td>'.$item->ProductName.'</td>
            <td>'.$item->PPrice.'</td>
            <td><input type="number" name="qty[]" value="'.$item->PQty.'"></td>
            <td>'.$cost.'.00</td>
            <td><button type="submit" class="btnzap" name="btnUpdate"   value="'.$r.'">Update</button></td>
            <td><button type="submit" class="btnzap" name="btnRemove" value="'.$r.'">Remove</button></td>
         
         
         </tr>';
         $r++;
         }

       }

      echo '<tr><td colspan="3"><h5>Total</h5></td><td>'.$total.'.00</td></tr>
      </table>';
       echo '</div>';
   //    echo '<button class="ordernowbtn"  type="submit" name="btnCO">Order Now!!!</button>';
     //  echo ' <P><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>';
     //  echo '<P><br><br><br><br><br><br><br><br><br><br><br><br></p>';

      if($total>0)
       {

     //  echo '<button class="ordernowbtn"  type="submit" name="btnCO">Order Now!!!</button>';
     //  echo '<button type="submit" class="btn btn-info btn-lg" name="btnCO" data-toggle="modal" id="btnModal" data-target="#myModal">Add A Review</button>';
     echo '   <button type="button" class="ordernowbtn" class="btn btn-info btn-lg" data-toggle="modal" id="btnModal" data-target="#myModal">Order Now!!!</button>';


    
     
      
      
      
      
      
      
      
      
      
       echo ' <P><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>';
      }
      else{
        echo '<P><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>';

      }
    //   echo '<P><br><br><br><br><br><br><br><br><br><br><br><br></p>';

      


    }

    else{
    

  echo ' <div class="container">';
  echo ' <div class="row">';
  echo '  <div class="col-md-12">';
  echo '   <div class="section-heading">';
  echo '<P><br><br><br><br><br><br><br><br><br><br></p>';
  echo '     <h20>Your Cart is Empty</h20>';
  echo '<P><br><br><br><br><br><br><br><br><br></p>';
  echo '   </div>';
  echo '   </div>';
  echo '   </div>';
  echo '   </div>';



    }
  }
  
/*}*/

  else{
   // echo '<script>alert("Product Added")</script>';

    echo ' <div class="container">';
    echo ' <div class="row">';
    echo '  <div class="col-md-12">';
    echo '   <div class="section-heading">';
    echo '<P><br><br><br><br><br><br><br><br><br><br></p>';
    echo '     <h20>Your Cart is Empty</h20>';
    echo '<P><br><br><br><br><br><br><br><br><br></p>';
    echo '   </div>';
    echo '   </div>';
    echo '   </div>';
    echo '   </div>';




  }




  
  
  ?>


  </form>













   
<form method="POST">
<?php

if(isset($_POST['btnCO']))
{





}


?>
</form>



<?php
if(isset($_POST['btnOrder']))
{
  if(isset($_SESSION['cart']))
  {
    $conn=Connection::GetConnection();
    $query1="INSERT INTO `customer_manager`(`CName`, `CPNumber`, `CAddress`, `CEmail`) 
    VALUES ('$_POST[txtCName]','$_POST[txtnumber]','$_POST[txtaddress]','$_POST[txtEmail]')"; 
    $stmt=$conn->prepare($query1);
    if($stmt->execute())
    {
      $stmt=$conn->query("SELECT LAST_INSERT_ID()");
      $lastId=$stmt->fetchColumn();

      $item=new CartItem();
      $item = $i;
      $cost=$item->PQty * $item->PPrice;
      $query2 ="INSERT INTO `customer_order`(`OID`, `Product_Name`, `Prod_Price`, `Prod_quntity`) 
      VALUES ('$lastId','.$item->ProductName.','.$item->PPrice.','.$item->PQty.')";
      
      foreach($_SESSION['cart'] as $key=>$item)
      {
        $query2 ="INSERT INTO `customer_order`(`OID`, `Product_Name`, `Prod_Price`, `Prod_quntity`) 
        VALUES ('$lastId','.$item->ProductName.','.$item->PPrice.','.$item->PQty.')";
      
      
      $stmt=$conn->prepare($query2);
      $stmt->execute();
      unset($_SESSION['cart']);
      echo '<script>alert("Thank you!!! We Will Deliver in 24 hours")</script>';
      

          echo' <script language="Javascript">';
          
          echo'  window.location = "index.php";';
          echo'  </script>';
      
     

      }
      
     



    }
    
  
   // header('location:about.php');
  
  }
  
    





}










?>


<form method="POST">
<?php

echo ' <div class="container">';
//echo '   <h2>Modal Example</h2>';
echo ' <!-- Trigger the modal with a button -->';
//echo '   <button type="button" class="ordernowbtn" class="btn btn-info btn-lg" data-toggle="modal" id="btnModal" data-target="#myModal">Order Now!!!</button>';

echo '<!-- Modal -->';
echo '   <div class="modal fade" id="myModal" role="dialog">';
echo '   <div class="modal-dialog">';
  
echo ' <!-- Modal content-->';
    echo '   <div class="modal-content">';
    echo '    <div class="modal-header">';
    echo '   <h4 class="modal-title">Add Your Details</h4>';
    echo '   <button type="button" class="close" data-dismiss="modal">&times;</button>';
 //   echo '   <h4 class="modal-title">Modal Header</h4>';
    echo '  </div>';
      echo '  <div class="modal-body" id="bodyofRe" style="background-image: url()">';
      echo '     <ul style="list-style-type: none;">';
      echo '     <br>';
   //   echo '     <br>';
     // echo '       <a><img id="ReviewImg" src="images/fb.png" alt=""></a>';
      echo '     <div id="rehead">';
      echo '    <h2>Jayasinghe Furnitures!!!<br>The Best Funiture Product Destination in Kandy</h2></div>';
      echo '    <br>';
     // echo '    <br>';



      echo'                     <ul>';
      echo'                          <li>';
      echo'                              <label><i class="fa fa-user"></i>Full Name:</label><br>';
      echo'                              <input class="contform" type="text" name="txtCName" placeholder="Enter Your Name " required><br>';
      echo'                          </li>';
     
      echo'                          <li>';
      echo'                              <label><i class="fas fa-phone-alt"></i> Contact Number:</label><br>';
      echo'                              <input class="contform" type="number" name="txtnumber" placeholder="Contact Number" required><br>';
      echo'                          </li>';
      echo'                          <li>';
      echo'                              <label><i class="fas fa-address-card"></i> Address:</label><br>';
      echo'                               <input class="contform" type="text" name="txtaddress" placeholder="Address" required><br>';
      echo'                           </li>';
      echo'                          <li>';
      echo'                              <label><i class="fa fa-envelope" ></i> Email:</label><br>';
      echo'                              <input class="contform" type="email" name="txtEmail" placeholder="example@gmail.com"><br>';
      echo'                          </li>';

    //  echo '<li><label><br><input  type="radio"  checked></label>';
      echo ' <input  type="radio"  checked><label>Cash On Delivery</label></li>';
     

      //echo ' <label>Cash On Delivery</label><input  type="radio"  checked></li>';

/*            echo'                    envelope       <li>';
      echo '       <button Class="addcart" type="submit" name="btnOrder"  >Place Order</button>'; 
      //echo'                               <input class="proceeder" type="submit" name="submit" value="submit">';
      echo'                          </li>';*/
      echo'                      </ul>';





/*       echo '<ul>';
      echo '  <li><input type="text" name="ReviewName" class="RRReviewbox" placeholder="Your Name"></li>';
      echo '   <li><input type="email" name="ReviewEmail" class="RRReviewbox" placeholder="Your Email"></li>';
      echo '  <li> <textarea rows = "3" name="ReviewMsg" class="RRReviewbox" cols = "10" placeholder="Enter Review"></textarea>';
     
      echo '<li> <input class="w3-radio" type="radio" name="gender" value="Cash On Delivery" checked>';
      echo ' <label>Cash On Delivery</label></li>';
      echo '   </ul>';*/



        
      echo '</div>';
      echo ' <div class="modal-footer">';
  //    echo '    <button type="submit" name="ReviewBtn" class="btn btn-default" id="submitreview">Submit</button>';
  echo '       <button Class="addcart" id="xxpalceorder" type="submit" name="btnOrder"  >Place Order</button>'; 

  echo '  </div>';
      echo '</div>';
    
      echo '  </div>';
      echo ' </div>';

      echo '</div>';







?>

</form>












    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; JAYASINGHE FURNITURES 2021
            
                - Design &amp; Developed By: <a rel="nofollow noopener" href="https://instagram.com/delta_developers_?utm_medium=copy_link" target="_blank">Delta Developers</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
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

</html>
<style>
h20
{
  margin-top: 50%; 
  margin-left: 10%;
  color: black;
  font-size: 5.5em;
  text-align:justify;
  font-family: 'Times New Roman', Times, serif;


}
.col-md-3-bill
{float: right;
  border: 1px green solid;
  margin-top: -33%;
  margin-left: 50%;
}
.rowcolor{background-color: white;}
.cont{display: block; position: relative;}
.cont form{background-color: white;}
input { width: 50%;}
tr{ background-color:rgba(41, 41, 41, 0.8); color: white;}
/*.addcart:hover{
    background: #fff;
    color: #04AA6D;
    border: 1px solid #04AA6D;
}*/

@media (max-width :411px)
{
  input { width: 40%;}
  
  th{ font-size: 0.95em;}
  .btnzap
  {
    width: 60%;
    background-color: #1c87c9;
        border: none;
        color: white;
       /* padding: 20px 34px;*/
        text-align: center;
        text-decoration: none;
        display: inline-block;
      
        font-size: 0.90em;
        margin-left: 2px;
        margin-bottom: 5px;
        margin-top: 4px;
     /*   margin: 4px 2px;*/
        cursor: pointer;

  }
  td{font-size: 0.65em; font: bolder}
  tr{ background-color:rgba(41, 41, 41, 0.8); width: 100%; color: white;}
 
}

.btnzap
{
/*	margin-top: 10px;
	margin-bottom: 25px;*/
  margin-top: 5px;
	margin-bottom: 5px;
	color: white;
	text-align: center;
/*	width: 20%;
	height: 40px;*/
	
	background-color:#04AA6D;
	border: white;

}

.btnzap:hover{
    background: #fff;
    color: #04AA6D;
    border: 1px solid #04AA6D;
}
.cont{ background-color: white; border-radius: 5px;}



</style>



<style>

  footer
  { margin-top: 5px;
  
  }
  </style>

<style>



.modal-title
{
  text-align: center;
}

#ReviewImg
{
  width: 200px;
  height: 200px;
  display: block;
  margin-left: 25%;
  border-radius: 5px;
}


#myModal
{
  margin-top: 80px;

}


#btnModal
    {
        float: left;
       
    }

    #cotainerReview
    {
      margin-top: 20px;

    }

    @media (max-width: 768px)
    {
      #btnModal
    {
        float: left;
        clear: both;
        margin-bottom: 25px;
       
    }

    #cotainerReview
    {
      clear: left;
    }

    }

    #bodyofRe
    {
      /*  width:100%;
        height: fit-content;
       /* background-image: url('images/2.png');*/
  /* background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;    /*100% 100%;
    background-position:center;*/
    background-color: #e0fcde;
    
        
        /*background-color: yellow;*/
    }

    .RRReviewbox
    {
        margin:5px;
        width: 60%;
        outline: none;
        background-color:#f5fe4e;
        border: white;
        color:black;
        border-radius: 5px;
    }
    #submitreview
    {
		background-color:#04AA6D;
        color: white;

    }

    #submitreview:hover
    {
        background-color:white;
        color: #04AA6D;
        border: 1px solid #04AA6D;

    }
    #review
    {
     
      margin-left:5px ;
     
    }

    .close
    {
     
       color: #04AA6D;
    }

    #rehead
    {
        color: black;
        font-size:xx-large;
        font:bolder;
        font-weight: 200;
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
    }



    
    

    @media (max-width: 500px)
    {
        #bodyofRe
        {
            background-position-y: -200px;
            background-position-x: -20px;
            background-size:100% 100%;

        }


    }

    #xxpalceorder
    {
      width:50%;
    }


    body
    {
      overflow-x: hidden;
    }


    @media (max-width: 350px)
    {
        #myModal
        {
          margin-left: 0px;
          

        }

        body
    {
      overflow-x: hidden;
    }

    }






</style>