<?php
error_reporting(0);

include("OB/product.php");
include("OB/cartItem.php");
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
   <!-- <meta property="og:image" content="images/logo.jpg">
<meta property="og:image:type" content="images/jpg">
<meta property="og:image:width" content="436">
<meta property="og:image:height" content="228">-->
  
    <title>Jayasinghe Sawmill & Furnitures</title>
    <link rel = "icon" type = "images/jpg" href = "images/logo.jpg" >
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/homeSlider.css">
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

    <!-- Header--> 



      <!-- Header new--> 
      <header class="">
    
    <nav class="navbar navbar-expand-lg">
      <div class="container">
      <a class="navbar-brand" href="index.php"><h2>Jayasinghe <em>Sawmill & Furnitures</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <div id="jp">
        <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                </a>
              </li> 
              
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link" href="about.php">About Us
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li>
            </ul>

            </div>

          </div>
          
        </div>
      </nav>
      </header>



      <!-- Header new end--> 


    <!-- Page Content -->
    
    <!-- Banner Starts Here -->

     <div class="banner header-text">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="sliders">
              <div class="contents">
             
                <h4>BEST COLLECTION</h4>
                <h2> JAYSINGHE FURNITURES</h2>
            
              </div>
          </div>
          
        </div>
        <div class="carousel-item">
          <div class="sliders1">
              <div class="contents">
              <h4>AMAZING OFFERS</h4>
                <h2>NEW ARRIVALS ON SALE</h2>
                
              </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="sliders2">
            <div class="contents">
            <h4>MAKE LIFE EASIER</h4>
                <h2>WITH ISLANDWIDE DELIVERY</h2>
              
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="sliders3">
            <div class="contents">
            <h4>CUSTOMIZED SERVICE</h4>
                <h2>24X7 HOTLINES</h2>
              
            </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div></div>
    </div> 
    <!-- Banner Ends Here -->

   


        <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <form method="GET" id="formss" action="search.php">
              <a> <input type="text" name="query" placeholder="Product"/><input type="submit" value="Search"></input></a>
                </form>
            </div>
            <div class="section-heading">
            
              <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
             <!-- <i class="fa fa-search"></i>-->
            </div>

            <style>#formss{background-color: white;} a input{border:#04AA6D 1px solid;border-radius: 5px;} a input[type=submit]{background-color: #04AA6D;cursor: pointer;}  </style>
         

          
          <form method="POST">

          <?php

          echo  '</div>';

$products=product::GetHomeProduct();
$row=0;
foreach($products as $product)
{

       echo '   <div class="col-md-4">';
       echo '     <div class="product-item">';
       echo '       <a><img src="'.$product->GetPcover().'" alt=""></a>';
       echo '       <div class="down-content">';
      
       echo '  <a  href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary().'&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
    //   echo '<br>';
       echo '    <h11>LKR'.$product->GetPprice().'</h11>';

  //     echo '        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>';
      echo '<input type="hidden" name="PTitle[]" value="'.$product->GetPName().'">';
      echo '<input type="hidden" name="PID[]" value="'.$product->GetPID().'">';
      echo '<input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'">';
      
  
      echo '<input id="qty" type="number" placeholder="Quntity" name="txtQty[]"><br>';
       echo ' <button Class="addcart" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>';        
       echo '       </div>';
       echo '      </div>';
       echo '    </div>';


$row++;
      }

          ?>

          </form>


        </div>
      </div>
    </div>
        









    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Jayasinghe Sawmill & Furnitures</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p class="aboutclass"> Welcome to Jayasinghe Saw Mills and Furniture, your number one source for all 
                things of wood products such as dining room items, living room items, kitchen items,
                 and also wood carvings. We're dedicated to giving you the very best of our furniture,
                  with a focus on your satisfaction and best quality product. </p>
              <a href="about.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about/about us2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>JAYASINGHE FURNITURE</em> Products</h4>
                  <p> We invite the enjoy this experience with our furniture collections</p>
                </div>
                <div class="col-md-4">
                  <a href="products.php" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; JAYASINGHE FURNITURES 2021
            
                - Design &amp; Developed by: <a rel="nofollow noopener" href="https://instagram.com/delta_developers_?utm_medium=copy_link" target="_blank">Delta Developers</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


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






      <?php
      

      if(isset($_POST["btnAdd"])&&isset($_POST["txtQty"]))
      {
        $r=$_POST["btnAdd"];
        if(!isset($_SESSION["cart"]))
        {
          $mycart=array();
          $_SESSION["cart"]=$mycart;

        }

        $mycart= $_SESSION["cart"];
        $found=false;
        if(sizeof($mycart)!=0)
        {
          foreach($mycart as $item)
          {
            $cartItem = new CartItem();
            $cartItem=$item;
            if($cartItem->PID == $_POST["PID"][$r])
            {
              $qty = $cartItem->PQty;
              $cartItem->PQty=$qty+$_POST["txtQty"][$r];
              $found=true;
              break;
            }
          }
        }

        if(!$found)
        {
          $cartItem= new CartItem();
          $cartItem->PID=$_POST["PID"][$r];
          $cartItem->PQty=$_POST["txtQty"][$r];
          $cartItem->ProductName=$_POST["PTitle"][$r];
          $cartItem->PPrice=$_POST["PPrice"][$r];
          array_push($mycart,$cartItem);
        }
        else
        {
        // echo 'Product Added to the Cart';

        //  header("index.php");
         // exit();
        }
        $_SESSION['cart']=$mycart;
      //  echo 'Added to the Cart';


   /*   echo '<script>alert("Order Deleted")</script>';
      echo' <script language="Javascript">';
      echo'  window.location = "index.php";';
      echo'  </script>';*/


        
      }
      else{

        header("index.php");
         exit();


       
      }


     

      
        






      ?>


  </body>

</html>
