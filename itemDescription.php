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
<style>
  .HeaderT{
    position: fixed;
    top:0px;
  }
</style>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/productdescription.css">

  </head>

  <body> <!--style>body{
		overflow-y: scroll;
		overflow-x: hidden;
	}</style-->

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
    <header class="Headert">
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

              <li class="nav-item">
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
    

    <!-- Page Content -->
    <div class="row">
        <div class="dimDowr"></div>
    </div>
    <div class="container">
      <form method="post">

      <?php
      if(isset($_GET['PID']))
      {
     //   echo $_GET['PID'];
        $POID =$_GET['PID'];

        

        $products =product::GetProductDes($POID);
        $row=0;
        foreach($products as $product)
        {
         // echo '<img src="'.$product->GetPcover().'" alt="" width="100" height="100">';
        echo' <div class="row">';
         echo'  <div class="col-md-6">';
         echo'     <div class="pimage">';
         echo'      <div class="product-item">';
         echo'        <a><img src="'.$product->GetPcover().'" alt=""></a>';
                  
         echo'      </div>';
         echo'     </div>';
         echo'     </div>';
        
         
          
         echo' <div class="col-md-5-alfix">';
            
         echo'   <div class="Dis">';
         echo'       <div class="down-content">';
         echo'        <h8>'.$product->GetPName().'</h8><br>';
       //  echo'          <p></p>';       
         echo'           <h7>LKR'.$product->GetPprice().'</h7>';

         echo'           <br><label><div  id="desi">Description</div></label>';
    
      echo'           <div  id="descrip-para"> <p>'.$product->GetPdescription().'</p></div>';
     //   echo'          <div class="zzzquantity">';
                    
        echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
        echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
        echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';              
         echo'            <input id="qqty" type="number" placeholder="Quntity" name="txtQty[]" required><br>';
         //echo'          <input Class="adddcart" type="submit" value="Add to cart" ></input>';
         echo ' <button Class="adddcart" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>';             
        
        
         echo'         </div>';            
         echo'      </div>';
         echo'   </div>';
         echo'  </div>';
     /*    echo' </div>';
         echo' </div>';
         echo'  </div>';*/


         
        
        
        




        /* echo' </div>';*/

$row++;
        }
      

        echo'  </div>';

      }


      ?>
      </form>
      
    </div>







    <div class="container">
      <form method="post">

      <?php
      if(isset($_GET['PID']))
      {
      // echo $_GET['PID'];
        $POID =$_GET['PID'];
       // echo $_GET['PNme'];
          $reProName= $_GET['PNme'];
     //   $reviewNameT=$_POST['ReviewMsg'];
        

        $products =product::GetProductDes($POID);
        $row=0;
        foreach($products as $product)
        {
          //echo 'fdfddfdfdf';

       echo ' <div class="container">';
       //echo '   <h2>Modal Example</h2>';
       echo ' <!-- Trigger the modal with a button -->';
       echo '   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="btnModal" data-target="#myModal">Add A Review</button>';
     
       echo '<!-- Modal -->';
       echo '   <div class="modal fade" id="myModal" role="dialog">';
       echo '   <div class="modal-dialog">';
         
       echo ' <!-- Modal content-->';
           echo '   <div class="modal-content">';
           echo '    <div class="modal-header">';
           echo '   <h4 class="modal-title">Add Review for '.$product->GetPName().'</h4>';
           echo '   <button type="button" class="close" data-dismiss="modal">&times;</button>';
        //   echo '   <h4 class="modal-title">Modal Header</h4>';
           echo '  </div>';
             echo '  <div class="modal-body" id="bodyofRe" style="background-image: url()">';
             echo '     <ul style="list-style-type: none;">';
             echo '     <br>';
             echo '     <br>';
             echo '       <a><img id="ReviewImg" src="'.$product->GetPcover().'" alt=""></a>';
             echo '     <div id="rehead">';
             echo '    <h2>Give your thoughts about our product</h2></div>';
             echo '    <br>';
             echo '    <br>';
             echo '  <li><input type="text" name="ReviewName" class="RRReviewbox" placeholder="Your Name"></li>';
             echo '   <li><input type="email" name="ReviewEmail" class="RRReviewbox" placeholder="Your Email"></li>';
             echo '  <li> <textarea rows = "3" name="ReviewMsg" class="RRReviewbox" cols = "10" placeholder="Enter Review"></textarea>';
            
           //  echo '<li> <input class="w3-radio" type="radio" name="gender" value="Cash On Delivery" checked>';
            // echo ' <label>Cash On Delivery</label></li>';
             echo '   </ul>';
               
             echo '</div>';
             echo ' <div class="modal-footer">';
             echo '    <button type="submit" name="ReviewBtn" class="btn btn-default" id="submitreview">Submit</button>';
             echo '  </div>';
             echo '</div>';
           
             echo '  </div>';
             echo ' </div>';
       
             echo '</div>';

       


  
          


          $row++;
        }
      

        echo'  </div>';

      }


      ?>
      </form>
      
    </div>

  
        
        





    <!--form method="POST">
     <button Class="adddcart" type="submit"  name="btnReview" id="popup" >Add Review </button>
    </form> <!--a class="button" href="#popup">Click Here For PopUp</a-->
     


    
<?php

if (isset($_POST['ReviewBtn']))
{
  $conn=Connection::GetConnection();
  $query="INSERT INTO `customer_review`( `ProID`, `ProName`, 
                        `ReCusName`, `ReCusEmail`, `ReCusReview`,`Permission`)
                        VALUES ($POID,'$_GET[PNme]','$_POST[ReviewName]',
                        '$_POST[ReviewEmail]','$_POST[ReviewMsg]','0')" ;

   $stmt=$conn->prepare($query);

  //'.$product->GetPName().' '$_GET[PNme]'

  $stmt->execute();
  echo '<script>alert("Thank you!!!Your Review Prosseing")</script>';
          echo' <script language="Javascript">';
          echo'  window.location = ""';
          echo'  </script>';




}


    




?>




    <div class="container" id="cotainerReview">
    <h4>Product Review</h4>
    <?php
    $conn =Connection::GetConnection();
							$order_query="SELECT * FROM `customer_review` WHERE `ProID`=$POID AND `Permission`=1";
							$stmts=$conn->prepare($order_query);
								$stmts->execute();


                $results = $stmts-> fetchAll();
                 //	<h5>'.$values['ReCusEmail'].'</h5> 
                

                if(sizeof($results)>0 )
                {
                  echo '<br>';
                 
               
                $r=0;
								foreach($results as $values)
								{

								echo '
								<h5>&#160;'.$values['ReCusName'].'</h5>
							
								<h5 id="review">'.$values['ReCusReview'].'</h5><br>
								';

                $r++;
								}
                
             }
              else
              {
                echo '<h5>No Review for this product yet</h5>';
              }

                ?>

    </div>



             


    
















    <style>#pDis{margin-left: 50%;}
    .reviewcss
    {border-color: white;cursor: pointer;
    outline: none;}

    
    
    </style>

    <div class="container">

    <h9>Related Products</h9>


      <form method="POST">

      <?php
      if(isset($_GET['PCAT']))
      {
       // echo $_GET['PCAT'];
        $PCATID =$_GET['PCAT'];
      
        $products =product::GetProDesReleted($PCATID);
        $row=0;
        echo ' <div class="row">';
       
        foreach($products as $product)
        {
         
         
          echo '<div class="col-lg-4 col-md-4 all des">';
          echo '<form method="post">';
          echo '<div class="product-item">';
          echo '<a ><img src="'.$product->GetPcover().'" alt=""></a>';
          echo '<div class="down-content">';
          echo '<a href="itemdescription.php?PID='.$product->GetPID().'&PCAT='.$product->GetPCatogary().'&PNme='.$product->GetPName().'""><h15>'.$product->GetPName().'</h15></a>';
          echo '    <h11>LKR'.$product->GetPprice().'</h11>';
          //echo '<h6>'.$product->GetPprice().'</h6>';

          echo' <input type="hidden" name="PTitle[]" value="'.$product->GetPName().'"> ';
          echo' <input type="hidden" name="PID[]" value="'.$product->GetPID().'"> ';  
          echo' <input type="hidden" name="PPrice[]" value="'.$product->GetPprice().'"> ';  
         
         echo ' <input class="productjpqty" name="txtQty[]" type="number" placeholder="Quntity"><br>';
         // echo '<input class="adddcartjp" type="submit" value="Add to Cart"></input>';
          echo ' <button Class="adddcartjp" type="submit" name="btnAdd" value="'.$row.'" >Add to Cart </button>';
          //  echo '</form>';
          echo '</div>';
          echo'</div>';
          echo'</div>';
          

          $row++;
        
      } 
      echo'</div>';      

      }
          
       ?>
        

          </form>
          </div>
      </div>

       
                    <!--    ?>

       </div>
      </div>
      
      -->
  
    
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

 // header("index.php");
  // exit();


 
}





?>


  </body>

</html>



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
  margin-top: 100px;

}


#btnModal
    {
        float: right;
       
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
        width: 80%;
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







</style>
