<?php
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
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Products
                </a>

                <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
              </li>
                
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

    

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>our products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="xsoeoe">
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            <h2>Furniture Products</h2>
              <form method="Get" id="formss" action="search.php">
              <a><input type="text" name="query" class="xxx" placeholder="Product"/><input type="submit" value="Search"></input></a>
                </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <style>#xsoeoe{margin-bottom:-130px;} a input{border:#04AA6D 1px solid;border-radius: 5px;} a input[type=submit]{background-color: #04AA6D;cursor: pointer;} </style>
            

      <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li  class="active" data-filter="*">All Products</li>
                  <li  data-filter=".des">Living Room</li>
                  <li data-filter=".dev">Dinning Room</li>
                  <li data-filter=".gra">Bed Room</li>
                  <li data-filter=".kit">Wood Carving</li>
                  <li data-filter=".outd">Outdoor Funitures</li>
                  
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                  


                    <form method="POST">
                    <?php

                    $products = product::GetLivingProduct();
                    $row=0;
                    foreach($products as $product)
                    {
                      echo ' <div class="col-lg-4 col-md-4 all des">';
                    echo ' <div class="product-item">';
                    echo '   <a ><img src='.$product->GetPcover().' alt=""></a>';
                    echo '   <div class="down-content">';
                    echo '  <a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary(). '&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
                    echo '    <h11>LKR'.$product->GetPprice().'</h11>';
                  //  echo '       <h6>LKR'.$product->GetPprice().'</h6>';
                  //  echo '       <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>';
                       
                  echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
                  echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
                  echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';

                  //itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary().'&PNme='.$product->GetPName().'"
                  
                 

                 //   echo '<input id="qty"  type="number" 
                    //    placeholder="Quntity" name="quantity01" required><br>';
                   // echo ' <input class="addcart" type="submit" value="Add to cart" ></input>';
                   echo ' <input class="productjpqty" type="number" name="txtQty[]" placeholder="Quntity"><br>';
                  //  echo '<input class="adddcartjp" type="submit" value="Add to Cart"></input>';
                    echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>';
                    
                   
                          echo '  </div>';
                          echo '  </div>';  
                          echo '  </div>';  
                        
                    
                    $row++;
                    }
                    
                    ?>
                      </form>




                      <form method="POST">
                    <?php

                    $products = product::GetDiningProduct();
                    $row=0;
                    foreach($products as $product)
                    {
                      echo ' <div class="col-lg-4 col-md-4 all dev">';
                    echo ' <div class="product-item">';
                    echo '   <a ><img src='.$product->GetPcover().' alt=""></a>';
                    echo '   <div class="down-content">';
                    echo '  <a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary(). '&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
                    echo '    <h11>LKR'.$product->GetPprice().'</h11>';
                  //  echo '       <h6>'.$product->GetPprice().'</h6>';
                  //  echo '       <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>';
                     
                  echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
                  echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
                  echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';


                    echo '<input class="productjpqty" type="number" placeholder="Quntity" name="txtQty[]"><br>';
                    //echo ' <input  class="adddcartjp" type="submit" value="Add to cart" ></input>';
                    echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>'; 
                    /* <!-- <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>-->*/
                          echo '     </div>';
                          echo '  </div>';
                          echo '  </div>';
                        
                    
                    $row++;
                    }
                    
                    ?>
                      </form>



                      <form method="POST">
                    <?php

                    $products = product::GetBedProduct();
                    $row=0;
                    foreach($products as $product)
                    {
                      echo ' <div class="col-lg-4 col-md-4 all gra">';
                    echo ' <div class="product-item">';
                    echo '   <a ><img src="'.$product->GetPcover().'" alt=""></a>';
                    echo '   <div class="down-content">';
                    echo '       <a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary(). '&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
                    echo '    <h11>LKR'.$product->GetPprice().'</h11>';
                    //echo '       <h6>"'.$product->GetPprice().'"</h6>';
                  //  echo '       <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>';
                     
                  echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
                  echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
                  echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';

                    echo '<input class="productjpqty" type="number" placeholder="Quntity" name="txtQty[]"><br>';
                   // echo ' <input  class="adddcartjp" type="submit" value="Add to cart" ></input>'; 
                   echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>';
                    /* <!-- <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>-->*/
                          echo '     </div>';
                          echo '  </div>';
                          echo '  </div>';
                        
                    
                    $row++;
                    }
                    
                    ?>
                      </form>




                      <form method="POST">
                    <?php

                    $products = product::GetWoodProduct();
                    $row=0;
                    foreach($products as $product)
                    {
                      echo ' <div class="col-lg-4 col-md-4 all kit">';
                    echo ' <div class="product-item">';
                    echo '   <a ><img src="'.$product->GetPcover().'" alt=""></a>';
                    echo '   <div class="down-content">';
                    echo '      <a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary(). '&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
                    echo '    <h11>LKR'.$product->GetPprice().'</h11>';
                   // echo '       <h6>"'.$product->GetPprice().'"</h6>';
                 //   echo '       <p>Lorem ipsume dolor sit amet, adipisicing elite. 
                 //   Itaque, corporis nulla aspernatur.</p>';

                 echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
                 echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
                 echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';

                    echo '<input class="productjpqty" type="number" placeholder="Quntity" name="txtQty[]"><br>';
                    //echo ' <input  class="adddcartjp" type="submit" value="Add to cart" ></input>';        
                    echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>'; 
                          echo '     </div>';
                          echo '  </div>';
                          echo '  </div>';
                        
                    
                    $row++;
                    }
                    
                    ?>
                      </form>




                      <form method="POST">
                    <?php

                    $products = product::GetOUTDOORProduct();
                    $row=0;
                    foreach($products as $product)
                    {
                      echo ' <div class="col-lg-4 col-md-4 all outd">';
                    echo ' <div class="product-item">';
                    echo '   <a ><img src="'.$product->GetPcover().'" alt=""></a>';
                    echo '   <div class="down-content">';
                    echo '     <a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary(). '&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a><br>';
                    echo '    <h11>LKR'.$product->GetPprice().'</h11>';
                    //echo '       <h6>"'.$product->GetPprice().'"</h6>';
                 //   echo '       <p>Lorem ipsume dolor sit amet, adipisicing elite. 
                 //   Itaque, corporis nulla aspernatur.</p>';
                 echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
                 echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
                 echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';

                    echo '<input class="productjpqty" type="number" placeholder="Quntity" name="txtQty[]"><br>';
                    //echo ' <input  class="adddcartjp" type="submit" value="Add to cart" ></input>';        
                    echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>'; 
                          echo '     </div>';
                          echo '  </div>';
                          echo '  </div>';
                        
                    
                    $row++;
                    }
                    
                    ?>
                      </form>

               
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
        
      }
      else{

      //  header("index.php");
      //   exit();


       
      }






      ?>



  </body>

</html>
